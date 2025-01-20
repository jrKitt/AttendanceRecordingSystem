
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
<?php 


require_once 'DB/db.php';
include './Asset/Header.php';
include './Asset/SideNav.php';



?>
<div class="p-4 sm:ml-64 mt-20">

    <form action="" method="post">
        <label for="default-search"
            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="default-search"
                class="block w-full p-4 pl-10 text-sm text-black border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="ค้นหา" required>
            <button type="submit"
                class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">ค้นหา</button>
        </div>
    </form>


    <div class="w-full   items-center">
        <div class="w-full gap-2 flex justify-end max-[767px]:justify-center     ">
            <form method="POST" class="" id="">
                <a type="button" href="./InsertData.php" style="display: inline-block;"
                    class="shadow bg-[#01cc85] focus:shadow-outline hover:bg-blue-500 focus:outline-none text-white font-bold py-2 px-8 rounded">เพิ่มรายงาน
                    <i class="fa-solid fa-plus"></i></a>
            </form>
            <form>
                <a type="button" href="./pdf/logs-print.php" name="submit" style="display: inline-block;"
                    class="shadow bg-[#2f69fd] focus:shadow-outline hover-bg-blue-500 focus:outline-none text-white font-bold py-2 px-8 rounded"
                    type="button">พิมพ์ <i class="fas fa-print"></i></a>
            </form>
        </div>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-2">

        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        เลขแจ้งเคส
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            วันที่แจ้งดำเนินงาน
                            <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg></a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            สถานที่เข้างาน
                            <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg></a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            ช่างผู้ทำงาน
                            <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg></a>
                        </div>
                    </th>

                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">แก้ไข</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                
                        $perpage = 5;
                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                        } else {
                            $page = 1;
                        }
                        $start = ($page - 1) * $perpage;
                        $sql = "SELECT * from mains ORDER BY LOGS_DATE ASC limit {$start} , {$perpage} ";
                        $query = $db->query($sql);
   
                    while($row = mysqli_fetch_assoc($query)):
                    
                
                ?>
                <tr class="bg-white border-b dark:bg-white dark:border-gray-200">
                    <th scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap dark:text-black">
                        <?php echo $row['LOGS_CASE_NUMBER'];?>
                    </th>
                    <td class="px-6 py-4 text-black">
                        <?php echo $row['LOGS_DATE'];?>

                    </td>
                    <td class="px-6 py-4 text-black">
                        <?php echo $row['LOGS_LOCATION'];?>

                    </td>
                    <td class="px-6 py-4 text-black">
                        <?php echo $row['LOGS_TECHNICIANS'];?>

                    </td>




                    <td class="px-6 py-4 text-right">
                        <button type="submit" data-modal-target="authentication-modal"
                            data-modal-toggle="authentication-modal"
                            data-case-number="<?php echo $row['LOGS_CASE_NUMBER']; ?>"
                            data-case-location="<?php echo $row['LOGS_LOCATION']; ?>"
                            data-case-date="<?php echo $row['LOGS_DATE']; ?>"
                            data-case-technician="<?php echo $row['LOGS_TECHNICIANS']; ?>"
                            data-case-contact="<?php echo $row['LOGS_CASE_CONTACT']; ?>"
                            data-case-phone="<?php echo $row['LOGS_PHONE']; ?>"
                            data-case-range="<?php echo $row['LOGS_RANGE_TIME']; ?>"
                            class="font-bold text-blue-600 text-red-300  hover:underline"
                            style="text-decoration:none;">
                            <i class="fa-regular fa-pen-to-square text-red-300"></i>แก้ไข
                        </button>


                        <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">

                            <div class="relative w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-100">
                                    <button type="button"
                                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="authentication-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>

                                    <div class="px-6 py-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white"></h3>
                                        <form action="./App/Edit.php" method="POST" class="mb-4" id="editForm">

                                            <div class="md:flex md:items-center mb-6">
                                                <div class="md:w-1/3">

                                                    <label
                                                        class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                                        for="inline-full-name">
                                                        เลขแจ้งเคส
                                                    </label>
                                                </div>
                                                <div class="md:w-2/3">
                                                    <input
                                                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-400"
                                                        id="inline-full-name" type="text"
                                                        value="<?php echo $row['LOGS_TECHNICIANS'];?>"
                                                        name="__caseNumber" required>
                                                </div>
                                            </div>
                                            <div class="md:flex md:items-center mb-6">
                                                <div class="md:w-1/3">
                                                    <label
                                                        class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                                        for="inline-full-name">
                                                        สถานที่เข้างาน
                                                    </label>
                                                </div>
                                                <div class="md:w-2/3">
                                                    <input
                                                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-400"
                                                        id="inline-password" type="text"
                                                        placeholder="<?php echo $row['LOGS_CASE_NUMBER'];?>"
                                                        name="__caseLocation" required>
                                                </div>
                                            </div>
                                            <div class="md:flex md:items-center mb-6">
                                                <div class="md:w-1/3">
                                                    <label
                                                        class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                                        for="inline-full-name">
                                                        วันที่แจ้งดำเนินงาน
                                                    </label>
                                                </div>
                                                <div class="relative md:w-2/3">
                                                    <div
                                                        class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="currentColor" viewBox="0 0 20 20">
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
                                                    <label
                                                        class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                                        for="inline-full-name">
                                                        ชื่อผู้ติดต่อ
                                                    </label>
                                                </div>
                                                <div class="md:w-2/3">
                                                    <input
                                                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-400"
                                                        id="inline-password" type="text" placeholder=""
                                                        name="__caseContact" required>
                                                </div>
                                            </div>
                                            <div class="md:flex md:items-center mb-6">
                                                <div class="md:w-1/3">
                                                    <label
                                                        class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                                        for="inline-full-name">
                                                        เบอร์โทรศัพท์
                                                    </label>
                                                </div>
                                                <div class="md:w-2/3">
                                                    <input
                                                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-400"
                                                        id="inline-password" type="text" placeholder=""
                                                        name="__casePhone" required>
                                                </div>
                                            </div>
                                            <div class="md:flex md:items-center mb-6">
                                                <div class="md:w-1/3">
                                                    <label
                                                        class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                                        for="inline-full-name">
                                                        ระยะเวลาดำเนินงาน
                                                    </label>
                                                </div>
                                                <div class="md:w-2/3">
                                                    <input
                                                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-400"
                                                        id="inline-password" type="text" placeholder=" / วัน"
                                                        name="__caseRange" required>
                                                </div>
                                            </div>
                                            <div class="md:flex md:items-center mb-6">
                                                <div class="md:w-1/3">
                                                    <label
                                                        class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                                        for="inline-full-name">
                                                        ช่างผู้ทำงาน
                                                    </label>
                                                </div>
                                                <div class="md:w-2/3">
                                                    <input
                                                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-400"
                                                        id="inline-password" type="text" placeholder=""
                                                        name="__caseTechnician" required>
                                                </div>

                                            </div>
                                            <div class="w-full   items-center">
                                                <div
                                                    class="w-full gap-2 flex justify-end max-[767px]:justify-center     ">

                                                    <input type="hidden" name="__caseNumberEdit" id="caseNumberField" value="">
                                                    <button type="submit" onclick="editForm()"
                                                        class="shadow bg-[#01cc85]  focus:shadow-outline hover:bg-blue-500 focus:outline-none text-white font-bold py-2 px-8 rounded">บันทึก
                                                        <i class="fa-regular fa-floppy-disk"></i>
                                                    </button>
                                        </form>
                                        <form action="./pdf/logs-print-user.php" method="POST" class="mb-4"
                                            id="printForm">
                                            <input type="" name="__caseTechnicianEdit" id="caseTechnicianField"
                                                value="">
                                            <button type="submit" name="submit" onclick="printForm()"
                                                class="shadow bg-[#2f69fd]  focus:shadow-outline hover:bg-blue-500 focus:outline-none text-white font-bold py-2 px-8 rounded"
                                                type="button">
                                                พิมพ์
                                                <i class="fas fa-print"></i></button>
                                        </form>
                                        <form action="" method="POST" class="mb-4">

                                            <button onclick="history.back();"
                                                class="shadow bg-red-500  focus:shadow-outline hover:bg-red-400 focus:outline-none text-white font-bold py-2 px-8 rounded"
                                                type="button">
                                                ลบ
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
    </div>
</div>
</div>
</td>
</tr>
<?php 
                endwhile; ?>
</tbody>
</table>
<?php
            $sql2 = "SELECT * from mains ";
            $query2 = $db->query($sql2);
            $total_record = mysqli_num_rows($query2);
            $total_page = ceil($total_record / $perpage);
            $total_pages = 1;
            ?>
<div class="mt-5 px-5 ">
    <a href="index.php?page=<?php echo $total_pages; ?>" aria-label="Next">
        <span aria-hidden="true" style="font-size:16px;"><i class="fa-solid fa-angles-left"></i></span>
    </a>
    <?php for ($i = 1; $i <= $total_page; $i++) { ?>
    <a href="index.php?page=<?php echo $i; ?>"><button class="btn btn-ghost border bordered"
            style="background-color:#E3E3E3;color:gray;"><?php echo $i; ?></button></a>
    <?php } ?>
    <a href="index.php?page=<?php echo $total_page; ?>" aria-label="Next">
        <span aria-hidden="true" style="font-size:16px;"><i class="fa-solid fa-angles-right"></i></span>
    </a>
</div>
</div>

</div>
<script>
const editButtons = document.querySelectorAll('[data-modal-toggle]');

editButtons.forEach(button => {
    button.addEventListener('click', function() {
        const modalId = button.getAttribute('data-modal-target');
        const caseNumber = button.getAttribute('data-case-number');
        const caseLocation = button.getAttribute('data-case-location');
        const caseDate = button.getAttribute('data-case-date');
        const caseTechnician = button.getAttribute('data-case-technician');
        const caseContact = button.getAttribute('data-case-contact');
        const casePhone = button.getAttribute('data-case-phone');
        const caseRange = button.getAttribute('data-case-range');

        const modal = document.getElementById(modalId);
        const caseNumberField = modal.querySelector('input[name="__caseNumber"]');
        const caseLocationField = modal.querySelector('input[name="__caseLocation"]');
        const caseDateField = modal.querySelector('input[name="__caseDate"]');
        const caseTechnicianField = modal.querySelector('input[name="__caseTechnician"]');
        const caseContactField = modal.querySelector('input[name="__caseContact"]');
        const casePhoneField = modal.querySelector('input[name="__casePhone"]');
        const caseRangeField = modal.querySelector('input[name="__caseRange"]');

        caseNumberField.value = caseNumber;
        caseLocationField.value = caseLocation;
        caseDateField.value = caseDate;
        caseTechnicianField.value = caseTechnician;
        caseContactField.value = caseContact;
        casePhoneField.value = casePhone;
        caseRangeField.value = caseRange;
    });
});
</script>

<script>
function printPdf() {
    const caseTechnician = document.querySelector('input[name="__caseTechnicianEdit"]').value;

    document.getElementById('caseTechnicianField').value = caseTechnician;

    document.getElementById('printForm').submit();
}

function editForm() {
    const caseNumber = document.querySelector('input[name="__caseNumberEdit"]').value;

    document.getElementById('caseNumberField').value = caseNumber;

    document.getElementById('editForm').submit();
}
</script>