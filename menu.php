<nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item <?php echo ($menupont=="vevo"?"active":""); ?>">
                            <a class="nav-link" href="index.php?menu=vevo">Vevők<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item <?php echo ($menupont=="futar"?"active":""); ?>">
                            <a class="nav-link" href="index.php?menu=futar">Futár</a>
                        </li>
                        <li class="nav-item <?php echo ($menupont=="rendelesek"?"active":""); ?>">
                            <a class="nav-link" href="index.php?menu=rendelesek">Rendelések</a>
                        </li>
                        <li class="nav-item <?php echo ($menupont=="kilepes"?"active":""); ?>">
                            <a class="nav-link" href="index.php?menu=kilepes">Kilépés</a>
                        </li>
                    </ul>
                </div>
            </nav>

