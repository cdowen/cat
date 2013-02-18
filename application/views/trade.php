 <link href="css/mobiscroll.custom-2.4.3.min.css" rel="stylesheet" type="text/css" />
 <link type="text/css" href="css/main.css" rel="stylesheet" />
 <link type="text/css" href="css/reset.css" rel="stylesheet" />
 <link type="text/css" href="css/shop.css" rel="stylesheet" />
 <link rel="stylesheet" href="css/ui-lightness/jquery-ui-1.10.0.custom.css"/>
    <script src="js/jquery-1.9.0.js"></script> 
    <script src="js/jquery-ui-1.10.0.custom.js"></script> 
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/shop.js"></script>
        <script src="js/mobiscroll.custom-2.4.3.min.js" type="text/javascript"></script>
 

<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine10/style.css" media="screen" />
	<script type="text/javascript" src="engine10/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
    
  	<!--trade-->
  	<div class="trade">
    	<b>请确定您的订单：</b>
    	<div class="trade-list">
        	<h1>订单信息：</h1>
            <table id="ver-minimalist" summary="订单信息">
                <thead>
                    <tr>
                        <th scope="col" width="350px">订单</th>
                        <th scope="col">单价/元</th>
                        <th scope="col">数量</th>
                        <th scope="col" width="150px">优惠</th>
                        <th scope="col" width="80px">小计/元</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Scary Movie</td>
                        <td>12.21</td>
                        <td>1</td>
                        <td>
                        <select name="trade-type" >
                        	<option>没有优惠活动</option>
                        </select>
                        </td>
                        <td>12.21</td>
                    </tr>
                    <tr>
                        <td>Epic Movie</td>
                        <td>Star Wars</td>
                        <td>Bad Boys</td>
                        <td>Madagascar</td>
                    </tr>
                    <tr>
                        <td>Spartan</td>
                        <td>LOTR</td>
                        <td>Die Hard</td>
                        <td>Finding Nemo</td>
                    </tr>
                    <tr>
                        <td>Dr. Dolittle</td>
                        <td>The Mummy</td>
                        <td>300</td>
                        <td>A Bug's Life</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="trade-address">
        	<h1>交易地址：</h1>
       		<button id="add-address">添加临时地址</button>
            <div id="dialog-form" title="添加地址">
               <form>
              <fieldset>
                <label for="name">收货人</label><br />
                <input type="text" name="name" id="name" class="ui-widget-content ui-corner-all" /><br />
                <label for="email">联系电话</label><br />
                <input type="text" name="phone" id="phone" value="" class="ui-widget-content ui-corner-all" /><br />
                <label for="password">收货地址</label><br />
                <input type="text" name="address" id="address" value="" class="ui-widget-content ui-corner-all" maxlength="100" style="width:300px"/><br />
              </fieldset>
              </form>
            </div>
            <!--列地址-->
            <div class="trade-address-list">
                         <ul>
                            <li><input type="radio" name="trade-address" value="1" checked="checked"/></li>
                            <li>xxx</li>
                            <li>1881040123#</li>
                            <li>徐特立图书馆一楼</li>
                        </ul>
            </div>
        </div>      
        <div class="trade-time">
       		 <h1>交易时间：</h1>
     	 <input name="date" id="date" />
		<a href="#" id="clear"><span>清除</span></a>
		<a href="#" id="show"><span>选择</span></a>
        </div>
        <div class="trade-ok">
       	 <button id="Submit">提交订单</button>
        </div>
    </div>
  	<!--trade end-->
    
</div>
</body>

</html>
