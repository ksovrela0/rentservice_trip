<?
include("../db.php");
$path = dirname(dirname(dirname(__FILE__)));
?>
<ul class="sidebar-menu loading">


									<li class="has-sub hidden" >
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-book"></i></span>
                        სლაიდერი                     <span class="arrow"></span>
                    </a>
                                            <ul class="sub">
                                            <li><a href="slider.php">რედაქტირება</a></li>

                                                                                                                        </ul>
                                    </li>
                                    <li class="has-sub hidden" >
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-book"></i></span>
                        ტრანსფერი                   <span class="arrow"></span>
                    </a>
                                            <ul class="sub">
                                            <li><a href="transfer_cat.php">ტრანსფერის კატეგორიები</a></li>
                                            <li><a href="transfer.php">ტრანსფერები</a></li>
                                                                                                                        </ul>
                                    </li>
                                    <li class="has-sub hidden" >
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-book"></i></span>

                        ლოკაციები <span style="color:red;"></span>                      <span class="arrow"></span>
                    </a>
                                            <ul class="sub">
                                            <li><a href="locations.php">რედაქტირება <span style="color:red;"></a></li>

                                                                                                                        </ul>
                                    </li>
									<li class="has-sub hidden" >
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-book"></i></span>
                        ტურები                   <span class="arrow"></span>
                    </a>
                                            <ul class="sub">
                                            <li><a href="tours.php">რედაქტირება</a></li>

                                                                                                                        </ul>
                                    </li>
									<li class="has-sub hidden" >
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-book"></i></span>
                        მძღოლები                  <span class="arrow"></span>
                    </a>
                                            <ul class="sub">
                                            <li><a href="drivers.php">რედაქტირება</a></li>

                                                                                                                        </ul>
                                    </li>



									
																		<li class="has-sub hidden" >
									                    <a href="javascript:;" class="">
									                        <span class="icon-box"><i class="icon-book"></i></span>

									                        შეკვეთები <span style="color:red;"></span>                      <span class="arrow"></span>
									                    </a>
									                                            <ul class="sub">
									                                            <li><a href="orders.php?id=1">რედაქტირება <span style="color:red;"></a></li>
																																
									                                                                                                                        </ul>
									                                    </li>
                                                                        <li class="has-sub hidden" >
									                    <a href="javascript:;" class="">
									                        <span class="icon-box"><i class="icon-book"></i></span>

									                        კომენტარები <span style="color:red;"></span>                      <span class="arrow"></span>
									                    </a>
									                                            <ul class="sub">
									                                            <li><a href="reviews.php">რედაქტირება <span style="color:red;"></a></li>
																																
									                                                                                                                        </ul>
									                                    </li>
																											

									<?
									//$CheckOff = mysql_query("SELECT * FROM addhotel WHERE seen='0'") or die(mysql_error());
									//$CheckOffC = mysql_num_rows($CheckOff);

									?>




									<li class="has-sub hidden" >
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-book"></i></span>
                        სისტემა                    <span class="arrow"></span>
                    </a>
                                            <ul class="sub">
                                                                                                                                        <li><a href="system.php?edit=1">სისტემური პარამეტრები</a></li>

                                                                                                                        </ul>
                                    </li>






	</ul>
