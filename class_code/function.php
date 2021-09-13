<?php
        function add_data($table,$data,$cn){
            $str="insert into `$table` (";
            $cnt=1;
            foreach($data as $key=>$value){
                $str.="`$key`";
                if($cnt++<count($data))
                    $str.=",";
            }
            $str.=") values(";
            
            $cnt=1;
            foreach($data as $key=>$value){
                $str.="'".addslashes($value)."'";
                if($cnt++<count($data))
                    $str.=",";
            }
            $str.=")";
    //        echo $str;
           $qu=$cn->query($str);
        }
        function update_data($table,$col,$id,$data,$cn){
            //update table set column=value,column=value where id=id
            $str="update `$table` set ";
            $cnt=1;
            foreach($data as $key=>$value){
                $str.="`$key`='".addslashes($value)."'";
                if($cnt++<count($data))
                    $str.=",";
            }
            $str.=" where {$col}=$id";
            $cn->query($str);

        }
        function delete_data($table,$col,$id,$cn){
            $query="delete from `$table` where {$col}=$id";
            $cn->query($query);
        }
        function get_table_data($table,$cn){
            $data=array();
            $res=$cn->query("select * from `$table`");
            while($row=mysqli_fetch_assoc($res))
                $data[]=$row;
            return $data;
        }
        function get_edit_data($table,$id,$cn){
            $query="select * from `$table` where id=$id";
            $res=$cn->query($query);
            return mysqli_fetch_array($res);
        }
        function get_jos($table,$cn)
        {
            $info = array();
            $res = $cn->query(" select * from '$table'");
            // print _r (Sres);
            while ($r = mysqli_fetch_assoc($res))
                $info[] = $r;
            return $info;
        }

        function get_json($table,$cn)
        {
            $info=array();
            $res = $cn->query("select * from `$table`");
            while ($d = mysqli_fetch_assoc($res))
                $info[]=$d;
            return $info;

        }

        function get_table_array($table,$key,$cn)
        {
            $query = "select * from `$table`";
            $res = $cn->query($query);
            $info = array();
            while ($r = mysqli_fetch_assoc($res)) {
                $info[$r['id']] = $r[$key];

            }
            return $info;
        }

        function send_message($senderid,$mobile,$sms){
            $url="http://www.bluesoftitsolution.com/send_message.php?senderid=".$senderid."&mobile=".$mobile."&sms=".$sms;
            file_get_contents($url);
        }

        function getdata($batch_id,$cn)
        {
            $res=$cn->query("select count(*) as total from attendance where date='".date('Y-m-d')."' and batch_id=$batch_id");
            $info=mysqli_fetch_assoc($res);
            $res=$cn->query("select count(*) as present from attendance where date='".date('Y-m-d')."' and attendance='P' and batch_id=$batch_id");
            $info1=mysqli_fetch_assoc($res);
            $perc=$info['total']==0?0:(($info1['present']*100)/$info['total']);
            return $perc;
        }