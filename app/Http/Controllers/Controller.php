<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    /**
     * 批量更新
     * @param string $tableName
     * @param array $multipleData
     * @return bool
     */
    public function updateBatch($tableName = "", $multipleData = array()){

        if( $tableName && !empty($multipleData) ) {

            // column or fields to update
            $updateColumn = array_keys($multipleData[0]);
            $referenceColumn = $updateColumn[0];
            unset($updateColumn[0]);
            $whereIn = "";

            $sql = "UPDATE ".env('DB_PREFIX', '').$tableName." SET ";
            foreach ( $updateColumn as $uColumn ) {
                $sql .=  $uColumn." = CASE ";

                foreach( $multipleData as $data ) {
                    $sql .= "WHEN ".$referenceColumn." = '".$data[$referenceColumn]."' THEN '".$data[$uColumn]."' ";
                }
                $sql .= "ELSE ".$uColumn." END, ";

                foreach( $multipleData as $data ) {
                    $whereIn .= "'".$data[$referenceColumn]."', ";
                }
                $sql = rtrim($sql, ", ")." WHERE ".$referenceColumn." IN (".  rtrim($whereIn, ', ').")";

            }

            // Update
            return DB::update(DB::raw($sql));
        } else {
            return false;
        }

    }
}
