<?php 
	include 'inc/header.php';

?>
<?php
			      $login_check = session::get('customer_login');
			      if ($login_check)
			      {
			      	header('Location:order.php');
			      }
			      
			       ?>
<?php
    // gọi class category
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
        $insert_customer = $cs->insert_customer($_POST); // hàm check catName khi submit lên
    }
     if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
        $login_customer = $cs->login_customer($_POST); // hàm check catName khi submit lên
    }
  ?>
 <div class="main">
    <div class="content">
    	 <div class="login_panel">
        	<h3>Đăng nhập</h3>
        	<?php
    		if(isset($login_customer)) 
    		{
    			echo $login_customer;
    		}
    		?>
        	<p>Đăng nhập bên dưới</p>
        	<form action="" method="post">
                	<input  class="form-control" type="text" name ="email" class="field"  placeholder="Nhập email">
                    <input  class="form-control" type="password" name="password" class="field" placeholder="Nhập mật khẩu">
                 <p class="note">Click vào đây nếu bạn quên mật khẩu<a href="#">click</a></p>
                    <div class="buttons"><div><input type="submit" name="login" class="grey" value="Đăng nhập"></div></div>
                </form>
                    </div>
    	<div class="register_account">
    		<h3>Đăng ký tài khoản mới</h3>
    		<?php
    		if(isset($insert_customer)) 
    		{
    			echo $insert_customer;
    		}
    		?>

    		<form action="" method="post">
		   			 <table>
						
		   				<tbody>
						<tr>
						<td>
							<div>
							<input class="form-control" type="text" name ="name" placeholder="nhập tên...">
							</div>
							
							<div>
							   <input  class="form-control" type="text" name="city" placeholder="nhập thành phố...">
							</div>
							
							<div>
								<input  class="form-control" type="text" name="zipcode" placeholder="nhập zip-code...">
							</div>
							<div>
								<input  class="form-control" type="text" name="email" placeholder="nhập email...">
							</div>
		    			 </td>
		    			<td>
						<div>
							<input  class="form-control" type="text" name="address" placeholder="nhập địa chỉ...">
						</div>
		    		<div>
						<select id="country" name="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">Lựa chọn quốc gia</option>         
							<option value="Afghanistan">Afghanistan</option>
							<option value="Albania">Albania</option>
							<option value="Algeria">Algeria</option>
							<option value="Argentina">Argentina</option>
							<option value="Armenia">Armenia</option>
							<option value="Aruba">Aruba</option>
							<option value="Australia">Australia</option>
							<option value="Austria">Austria</option>
							<option value="Azerbaijan">Azerbaijan</option>
							<option value="Bahamas">Bahamas</option>
							<option value="Bahrain">Bahrain</option>
							<option value="Bangladesh">Bangladesh</option>
							<option value="Việt Nam">Việt Nam</option>

		         </select>
				 </div>		        
	
		           <div>
		          <input  class="form-control" type="text" name="phone" placeholder="nhập số điện thoại">
		          </div>
				  
				  <div>
					<input  class="form-control" type="password" name="password" placeholder="nhập mật khẩu">
				</div>
		    	</td>
		    </tr> 
		    </tbody></table> 
		   <div class="search"><div><input type="submit" name="submit" class="grey" value="Tạo tài khoản"></div></div>
		    <p class="terms">Click vào để xem  <a href="#"> Nội quy &amp; điều khiện</a>.</p>
		    <div class="clear"></div>
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
<?php
	include 'inc/footer.php'; 
?>