<?php
    /**
     * @param $code 编码
     * @param string $data 数据
     * @param string $msg 信息
     * @return string
     */
	function json($code, $data='' ,$msg='') {
	    return json_encode(array('code' => $code, 'data' => $data, 'msg' => $msg,));
	}

	/**
	 * @param $string 加密字符串
	 * @return string 加密后字符串
	 */
	function encrypt_code($string){
	    return sha1(md5(env('APP_KEY')).sha1($string).md5(sha1('').sha1(env('APP_KEY'))));
	}

	/**
	 * 数据打印
	 * @return [type] [description]
	 */
	function debug(){
		$num = func_num_args();
		$type = func_get_arg($num-1);
		header('Content-Type:text/html; charset=utf-8');
		$type = is_int($type) ? $type : 1;
		$vars = func_get_args();
		echo '<pre>';
		switch ($type) {
			case 1:
				print_r($vars);
				break;
			case 2:
				var_dump($vars);
				break;
			default:
				break;
		}
		echo '</pre>';
		exit;
	}
