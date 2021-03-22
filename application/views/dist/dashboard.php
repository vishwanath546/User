<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<style>
    p{
        font-size: 17px;
    }
</style>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h3>Dashboard</h3>
            <div class="section-header-breadcrumb">


            </div>
        </div>
        <div class="row" id="user_section" >
            <div class="col col-md-12 ">
                <div class="card">
                    <h4>Q 1 ) </h4>
                    <p>OOPs:- rating is =4,  i usually worked on codeigniter framework so we dont have to use amy oops concept there is already pre-defind functions are available</p>

                    <p> PHP:- rating is =4,  i am working on php since last 2 year but the php is very wast so i didn't complete each and every scenario </p>

                    <p>  MySQL:- rating is =4,  i am working on mysql since last 2 year not used many of things </p>

                    <p>   Framework (Codeigniter or Laravel) :- rating is =5,  i am working on codeigniter framework since last 2 year but the php is very wast so i didn't complete each and every scenario </p>

                    <p>    AWS :- rating is =2,  i dont use aws but i used to something about that like how to connect pem file to notepad and how to connect putty</p>

                    <p>     Logical Concept:- rating is =4, we got the already readymade function available in php so we dont have to search and develop more things about it  </p>

                    <p>    Business Concept:- rating is =3, i did't communicate more with the client to know how the business work but i have little idea of business of how it works by understanding the scenario  </p>
                </div>

                <div class="card">
                    <h4>Q 2 )

                        Input: arr= [2, 3, 3, 2, 5]</h4>
                    <br/>
                    <p><?php $b=array(2, 3, 3, 2, 5);
                        $temp=array();

                        for($i=1;$i<=count($b);$i++){
                            $n=0;
                            for($j=0;$j<count($b);$j++){
                                if($i==$b[$j]){
                                    $n++;
                                }
                            }
                            echo $i."=".$n."<br>";
                        }
                        ?></p>


                </div>

                <div class="card">
                    <h4>Q 3)
                        Input: A= [3, 7, 4, 3, 3, 4]


                    <br/>
                        <br/>
                    <p><?php

                        $arrData = array(3, 7, 4, 3, 3, 4);
                        $n=0;
                       for($i=0;$i<count($arrData);$i++){

                           for($j=0;$j<count($arrData);$j++){
                               if($arrData[$i]==$arrData[$j]){
                                   $n++;

                               }
                               break;
                           }

                       }
                       echo 'Total set is ='.$n;
                        ?></p>


                </div>

                <div class="card">
                    <h4>Q 4)
                        <br/>
                        <p> build in Another Page
                            click on link to go on page
                            <a href="<?= base_url('user_form');?>">Clik me</a>
                        </p>


                </div>
                <div class="card">
                    <h4>Q 5)
                        <br/>
                        <p> I build email configuration module from scratch
                        i learned how to configure imap function and there different types of function like move folder , delete folder, create folder,move email from one folder to another folder,fetch the email list and there body
                        send email from individual email id by mailer
                        </p>


                </div>

            </div>

        </div>








</div>

</div>
</section>
</div>


<?php $this->load->view('dist/_partials/footer'); ?>


