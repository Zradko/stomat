<?php
/**
 * Created by PhpStorm.
 * User: Ihor
 * Date: 12.11.2020
 * Time: 23:10
 */
namespace ifpr\view;
class footer
{
function __construct()
{
   // return $this->loadfooter();
}
 public   function loadfooter(){
    $footer='
                        <div class="col-md-9" style="height: 350px">
                                    <canvas data-chart="line" data-dataset="[
                                                            [0, 15, 4, 30, 8, 5, 18],
                                                            [1, 7, 21, 4, 12, 5, 10],
                                                
                                                            ]" data-labels="[\'A\', \'B\', \'C\', \'D\', \'E\', \'F\']"
                                            data-dataset-options="[
                                                            {   label:\'HTML\',
                                                                fill: true,
                                                                backgroundColor: \'rgba(50,141,255,.2)\',
                                                                borderColor: \'#328dff\',
                                                                pointBorderColor: \'#328dff\',
                                                                pointBackgroundColor: \'#fff\',
                                                                pointBorderWidth: 2,
                                                                borderWidth: 1,
                                                                borderJoinStyle: \'miter\',
                                                                pointHoverBackgroundColor: \'#328dff\',
                                                                pointHoverBorderColor: \'#328dff\',
                                                                pointHoverBorderWidth: 1,
                                                                pointRadius: 3,
                                                                
                                                            },
                                                            {  
                                                                label:\'Wordpress\',
                                                                fill: false,
                                                                borderDash: [5, 5],
                                                                backgroundColor: \'rgba(87,115,238,.3)\',
                                                                borderColor: \'#2979ff\',
                                                                pointBorderColor: \'#2979ff\',
                                                                pointBackgroundColor: \'#2979ff\',
                                                                pointBorderWidth: 2,
                                                
                                                                borderWidth: 1,
                                                                borderJoinStyle: \'miter\',
                                                                pointHoverBackgroundColor: \'#2979ff\',
                                                                pointHoverBorderColor: \'#fff\',
                                                                pointHoverBorderWidth: 1,
                                                                pointRadius: 3,
                                                                
                                                            }
                                                            ]"
                                            data-options="{
                                                                    maintainAspectRatio: false,
                                                                    legend: {
                                                                        display: true
                                                                    },
                                                        
                                                                    scales: {
                                                                        xAxes: [{
                                                                            display: true,
                                                                            gridLines: {
                                                                                zeroLineColor: \'#eee\',
                                                                                color: \'#eee\',
                                                                            
                                                                                borderDash: [5, 5],
                                                                            }
                                                                        }],
                                                                        yAxes: [{
                                                                            display: true,
                                                                            gridLines: {
                                                                                zeroLineColor: \'#eee\',
                                                                                color: \'#eee\',
                                                                                borderDash: [5, 5],
                                                                            }
                                                                        }]
                                                        
                                                                    },
                                                                    elements: {
                                                                        line: {
                                                                        
                                                                            tension: 0.4,
                                                                            borderWidth: 1
                                                                        },
                                                                        point: {
                                                                            radius: 2,
                                                                            hitRadius: 10,
                                                                            hoverRadius: 6,
                                                                            borderWidth: 4
                                                                        }
                                                                    }
                                                                }">
                                    </canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


    <script src="../assets/js/app.js"></script>
<!--
--- Footer Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
</body>
</html>
    ';
    return $footer;
    }
}