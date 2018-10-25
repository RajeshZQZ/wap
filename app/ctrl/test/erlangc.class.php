<?php

/**
 * Created by PhpStorm.
 * User: zengqingzhang
 * Date: 2018/10/24
 * Time: 17:09
 */


class ctrl_test_erlangc {

    public $pho ;//话务请求率 
    public $Ts ;//平均通话时长
    public $time ;//来电数量精度
    public $waite;//等待时间；
    public $answer;//服务水平
    public $e = 2.718281828;

  //  public $p ; //代理的占用率 u/m
  //  public $Tw;//可能等待的概率
 //   public $u ;//流量密度$rate*$Ts
   // public $m = 1 ;//座席数

    public function main()
    {
        $data = array();
        $data = $_REQUEST;
        $this->pho = $data['pho'];
        $this->Ts = $data['ts'];
        $this->time = $data['time'];
        $this->waite = $data['waite'];
        $this->answer = $data['answer'];

        $b = $this->time;
        $a = $this->pho / $b;
        $u = $a * $this->Ts;
        $end = 0;

        for ($m = 1; $end > $this->answer; $m++) {
            $p = $u / $m;
            $s = pow($u,$m)/$this->jisuan($m);
            $x = $s+(1-$p)*$this->leijia($u,$m);
            $ec = $s/$x;
           // $tw = ($ec*$this->Ts)/($m*(1-$p));
            $mi = -($m-$u)*$this->waite/$this->Ts;
            $end = 1-$ec*pow($this->e,$mi);
        }
        echo json_encode($data);
        echo "<br>";
        echo "end:".$end."m:".$m;

    }
    public function jisuan($i){
            if($i==0){
                return 1;
            }elseif($i<0){
                $rest=$i*$this->jisuan($i+1);
//负数往0靠近是+1
                return $rest;
            }else{
                $rest=$i*$this->jisuan($i-1);
//正数往0靠近是-1
                return $rest;
            }
    }

    public function leijia($u,$m){
        $result = 0;
        for($k=0;$k>$m-1;$k++){
           $result =+ pow ($u,$k)/$this->jisuan($k);
        }
        return $result;
    }

}