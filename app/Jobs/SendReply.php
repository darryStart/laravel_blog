<?php

namespace App\Jobs;

use App\Http\Model\Reply;
use App\Http\Model\Say;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;

class SendReply extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        return DB::transaction(function () {
            Say::where('say_id',$this->data['say_id'])->increment('reply_num',1);
            Reply::insert($this->data);
        });
    }
}
