<header class="wow fadeInDown" data-wow-delay=".4s">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-6 col-lg-2">
                <div class="logo">
                    <a href="<?php echo $pageurl; ?>/">
                        <img src="<?php echo $pageurl; ?>/public/images/logo.png" alt="" />
                    </a>
                </div>
            </div>

            <div class="col-12 col-lg-6 d-none d-xl-block">
                <ul class="menu-list">
                    <li>
                        <a href="<?php echo $pageurl; ?>/" class="line">Home</a>
                    </li>

                    <li>
                        <a href="<?php echo $pageurl; ?>/conceito" class="line">Conceito</a>
                    </li>

                    <li>
                        <a href="<?php echo $pageurl; ?>/servicos" class="line">Serviços</a>
                    </li>

                    <li>
                        <a href="<?php echo $pageurl; ?>/portfolio" class="line">Portfólio</a>
                    </li>

                    <li>
                        <a href="<?php echo $pageurl; ?>/contato" class="line">Contato</a>
                    </li>

                    <li>
                        <span class="sublink">
                            <a href="<?php echo $pageurl; ?>/automotivo">
                                Automotivo

                                <svg width="6" height="4" viewBox="0 0 6 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 0H0L3 4L6 0Z" fill="white"/>
                                </svg>
                            </a>

                            <!-- <div class="list-dropdown">
                                <ul>
                                    <li>
                                        <a href="#">Automotivo</a>
                                    </li>
                                </ul>
                            </div> -->
                        </span>
                    </li>
                </ul>
            </div>

            <!-- <div class="col-6 col-lg-1 text-right">
                <a href="#" class="open-menu">
                    <svg width="43px" height="13px">
                        <path 
                            fill-rule="evenodd"  
                            fill="rgb(255, 255, 255)"
                            d="M0.186,3.643 L0.186,0.503 L42.999,0.503 L42.999,3.643 L0.186,3.643 ZM42.999,12.151 L14.101,12.151 L14.101,9.11 L42.999,9.11 L42.999,12.151 Z"
                        />
                    </svg>
                </a>
            </div> -->
        </div>
    </div>
</header>

<?php include('components/menu.php'); ?>