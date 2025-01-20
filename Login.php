
<?php 

    require './DB/db.php';
    include './Asset/Header.php';


?>
  <link rel="icon" type="image/x-icon" href="./Asset/Img/logo.png">

<form action="App/Auth.php" method="post">
<div class="min-h-screen sm:flex sm:flex-row mx-0 justify-center">
      <div class="flex-col flex  self-center p-10 sm:max-w-5xl xl:max-w-2xl  z-10">
        <div class="self-start hidden lg:flex flex-col  text-white">
          <img src="" class="mb-3">
        
    
        </div>
      </div>
      <div class="flex justify-center self-center   z-10">
        <div class="p-12 shadow-md bg-white mx-auto rounded-2xl w-100 ">
            <div class="mb-4">
            <img src="Asset/Img/logo.png" alt="" width="128" height="128" style="text-align: center;
              display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;" class="flex justify-items-center items-center align-center">
              <h3 class="font-semibold text-2xl text-gray-800">เข้าสู่ระบบ</h3>
            
            </div>
            <div class="space-y-5">
                        <div class="space-y-2">
                              <label class="text-sm font-medium text-gray-700 tracking-wide">ชื่อผู้ใช้งาน</label>
              <input class=" w-full text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400" type="" placeholder="Enter your Username" name="__Username" required>
              </div>
                          <div class="space-y-2">
              <label class="mb-5 text-sm font-medium text-gray-700 tracking-wide">
                รหัสผ่าน
              </label>
              <input class="w-full content-center text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400" type="password" placeholder="Enter your password" name="__Password" required>
            </div>
              <div class="flex items-center justify-between">
           
             
            </div>
            <div>
              <button type="submit" class="w-full flex justify-center bg-green-400  hover:bg-green-500 text-gray-100 p-3  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
                เข้าสู่ระบบ
              </button>
            </div>
            </div>
            <div class="pt-5 text-center text-gray-500 text-xs">
              <span>
            
              
            </div>
        </div>
      </div>
  </div>
</div>

</form>
<?php include 'Asset/Footer.php'; ?>

