<?php
if (isset($_SESSION["adminname"])) {
    echo "<ul class='navbar-nav me-right mb-2 mb-lg-0'>
                <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle' role='button' data-bs-toggle='dropdown' aria-expanded='false'>" . $_SESSION['adminname'] . "</a>
                    <ul class='dropdown-menu'>
                        <li>
                            <a class='dropdown-item' href='../logout.php'>Çıkış yap</a>
                        </li>
                    </ul>
                </li>
            </ul>";

} else {
    echo " <ul class='navbar-nav me-right mb-2 mb-lg-0'>
           <li class='nav-item'>
               <a class='login-button' id='login-button' name='login-button' href='#'><svg xmlns='http://www.w3.org/2000/svg' width='35' height='35'
               fill='currentColor' class='bi bi-person-circle' viewBox='0 0 16 16'>
               <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0' />
               <path fill-rule='evenodd'
               d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1' />
           </svg></a>
       </li>
   </ul>";
}
?>