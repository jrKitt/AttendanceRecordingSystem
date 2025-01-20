<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
<?php 

include './Asset/Header.php';
include './Asset/SideNav.php';

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/datepicker.min.js"></script>

<?php 

    require './DB/db.php';
    include './Asset/Header.php';


?>


<div class="p-4 flex justify-center items-center h-screen sm:ml-64">
<form class="w-full max-w-lg" action="./App/Create.php" method="post">

        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    เลขแจ้งเคส
                </label>
            </div>
            <div class="md:w-2/3">
                <input
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-400"
                    id="inline-full-name" type="text" value="000000001" name="__caseNumber" required>
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    สถานที่เข้างาน
                </label>
            </div>
            <div class="md:w-2/3">
                <input
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-400"
                    id="inline-password" type="text" placeholder="" name="__caseLocation" required>
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    วันที่แจ้งดำเนินงาน
                </label>
            </div>
            <div class="relative md:w-2/3">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                    </svg>
                </div>
                <input datepicker type="text"
                    class="bg-gray-200 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-green-400 block w-full pl-10 p-2.5 "
                    placeholder="<?php 
                    
                    echo date("m-d-Y");
                    
                    ?>" name="__caseDate" VALUE="<?php 
                    
                    echo date("m-d-Y");
                    
                    ?>" required>
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    ชื่อผู้ติดต่อ
                </label>
            </div>
            <div class="md:w-2/3">
                <input
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-400"
                    id="inline-password" type="text" placeholder="" name="__caseContact" required>
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    เบอร์โทรศัพท์
                </label>
            </div>
            <div class="md:w-2/3">
                <input
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-400"
                    id="inline-password" type="text" placeholder="" name="__casePhone" required>
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    ระยะเวลาดำเนินงาน
                </label>
            </div>
            <div class="md:w-2/3">
                <input
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-400"
                    id="inline-password" type="text" placeholder=" / วัน" name="__caseRange" required>
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    ช่างผู้ทำงาน
                </label>
            </div>
            <div class="md:w-2/3">
                <input
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-400"
                    id="inline-password" type="text" placeholder="" name="__caseTechnician" required>
            </div>
        </div>
        <div class="w-full   items-center">
            <div class="w-full gap-2 flex justify-end max-[767px]:justify-center     ">
                                                    <button type="submit" name="submit"
                                                      class="shadow bg-[#01cc85]  focus:shadow-outline hover:bg-green-500 focus:outline-none text-white font-bold py-2 px-8 rounded"
                                                        type="button">
                                                        บันทึก
                                                        <i class="fa-regular fa-floppy-disk"></i></button>
                                                    
                                                    <button onclick="history.back();"
                                                        class="shadow bg-red-500  focus:shadow-outline hover:bg-red-400 focus:outline-none text-white font-bold py-2 px-8 rounded"
                                                        type="button">
                                                        กลับ
                                                    </button>
                                                </div>
        </div>
    </form>
  </div>

<?php include 'Asset/Footer.php'; ?>
