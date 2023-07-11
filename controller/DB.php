<?php
    class DB{
        protected $dsn;
        protected $pdo;
        protected $table;
        protected $links;

        function __construct($table){
            $this->dsn='mysql:host=localhost;charset=utf8;dbname=db02';
            $this->pdo=new PDO($this->dsn,'root','');
            $this->table=$table;
        }

        function all(...$arg){
            $sql="select * from $this->table ";
            
            if(!empty($arg[0])){
                if(is_array($arg[0])){
                    foreach($arg[0] as $key=>$value){
                        $tmp []= "`$key` = '$value'";
                    }
                    $sql=$sql . ' where ' . join('&&',$tmp);
                }else{
                    $sql=$sql  . $arg[0];
                }
            }
            if(isset($arg[1])){
                $sql = $sql . $arg[1];
            }
            dd($sql);
            return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        }

        function find($arg){
            $sql="select * from $this->table ";
            if(!empty($arg)){
                if(is_array($arg)){
                    foreach($arg as $key=>$value){
                        $tmp[]="`$key` = '$value'";
                    }
                    $sql=$sql . ' where '. join('&&',$tmp);
                }else{
                    $sql=$sql . " where `id` = '$arg'";
                }
                dd($sql);
                return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
            }
        }

        function count(...$arg){
            $sql = "select count(*) from $this->table ";
            if(!empty($arg[0])){
                if(is_array($arg[0])){
                    foreach($arg[0] as $key => $value){
                        $tmp[]="`$key` = '$value'";
                    }
                    $sql=$sql . ' where '.join('&&',$tmp);
                }else{
                    $sql = $sql . $arg[0];
                }    

            }
            if(isset($arg[1])){
                $sql = $sql .$arg[1];
            }
            return $this->pdo->query($sql)->fetchColumn();
        }
        function save($arg){
            //update
            if(isset($arg['id'])){
                $sql="update $this->table set ";
                foreach($arg as $key=>$value){
                    $tmp[]="`$key` = '$value'";
                }
                $sql=$sql . join(',',$tmp).' where '. " `id` = '{$arg['id']}'";

            }else{
            //insert
            $sql="insert into $this->table (`";
            $keys=array_keys($arg);
            $sql=$sql . join("`,`",$keys) ."`) values ('".join("','",$arg)."')";

            }
            dd($sql);
            return $this->pdo->exec($sql);
        }

        function del($arg){
            $sql="delete from $this->table ";
            if(is_array($arg)){
                foreach($arg as $key => $value){
                    $tmp[]="`$key` = '$value'";
                }
                $sql=$sql .' where '. join('&&',$tmp);
            }else if(is_numeric($arg)){
                $sql=$sql . ' where '."`id` = '$arg'";

            }else{
                $sql=$sql . $arg;
            }
            dd($sql);
            return $this->pdo->exec($sql);
        }

        function math($math,$col,...$arg){
            $sql="select $math($col) from $this->table";
            if(is_array($arg[0])){
                foreach($arg[0] as $key=>$value){
                    $tmp[]="`$key` = '$value'";
                }
                $sql=$sql . ' where ' . join('&&',$tmp);
            }else{
                $sql=$sql .$arg[0];
            }
            if(isset($arg[1])){
                $sql = $sql . $arg[1];
            }
            dd($sql);
            return $this->pdo->query($sql)->fetchColumn();
        }

        function sum($col,...$arg){
            return $this->math('sum',$col,...$arg);
        }
        function max($col,...$arg){
            return $this->math('max',$col,...$arg);
        }
        function min($col,...$arg){
            return $this->math('min',$col,...$arg);
        }
        function avg($col,...$arg){
            return $this->math('avg',$col,...$arg);
        }
        function pagenite($div,$arg=null){
            $total=$this->count($arg);
            $pages=ceil($total/$div);
            $now=$_GET['page']??'1';
            $start=($now-1)*$div;
            $rows=$this->all($arg,"limit $start,$div");

            $this->links=[
                'start'=>$start,
                'now'=>$now,
                'pages'=>$pages,
                'total'=>$total,
            ];
            dd($this->links);
            
            return $rows;
        }

        function links(){
            if($this->links['now']-1>=1){
                $prev=$this->links['now']-1;
                echo "<a href='?do=$this->table&page=$prev'> &lt; </a>";
            }
            for($i=1;$i<=$this->links['pages'];$i++){
                $fontSize=($i==$this->links['now'])?'24px':'16px';           
                echo "<a href='?do=$this->table&page=$i' style='font-size:$fontSize'>$i</a>";
            }
            if($this->links['now']+1<=$this->links['pages']){
                $next=$this->links['now']+1;
                echo "<a href='?do=$this->table&page=$next'>&gt;</a>";
            }
        }
    }