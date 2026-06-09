<?php include 'includes-pages/header.php' ?>
<?php include 'includes-pages/menu-navigation.php' ?>

<div class="cafe-list-container">
    <div class="dishes-header">
        <h2 class="dishes-header-title">
            Other Drinks
        </h2>
    </div>
    <div class="cafe-item-menu row">
        <!-- calamansi Juice -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Fresh Calamansi Juice</h1>
                    </div>
                    <div class="mcc-ing mcc-calamansi">
                        <p class="other-drinks-p">
                        </p>
                        <div class="checkbox-price-con">
                            <div class="form-check">
                                <input class="form-check-input rice-checkbox" type="radio" name="calamansijuice" id="calamansiJuiceHot">
                                <label class="form-check-label rice-checbox-label" for="calamansiJuiceHot">
                                    &#8369;100.00 (Hot)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input rice-checkbox" type="radio" name="calamansijuice" id="calamansiJuiceCold">
                                <label class="form-check-label rice-checbox-label" for="calamansiJuiceCold">
                                    &#8369;105.00 (Cold)
                                </label>
                            </div>                                
                        </div>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Cold Calamansi Juice' onclick="calamansiJuice(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Hot Tea card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1 mccc-right">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Hot Tea (Taylors)</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="other-drinks hot-tea-p">
                            <!-- Choice of flavored tea. -->
                        </p>
                        <span class="in-prices">Price: &#8369;65.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Hot Tea' onclick="otherDrinksArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Cold Tea card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Raspberry Cold Tea</span></h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="other-drinks">
                            <!-- Flavored tea in ice. -->
                        </p>
                        <span class="in-prices">Price: &#8369;115.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Raspberry Cold Tea' onclick="otherDrinksArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Cold Tea card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container mccc-right flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Green Apple Cold Tea</span></h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="other-drinks">
                            <!-- Flavored tea in ice. -->
                        </p>
                        <span class="in-prices">Price: &#8369;115.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Green Apple Cold Tea' onclick="otherDrinksArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Coke in can card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Coke in can</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="other-drinks coke-can-p">
                            <!-- Coke in can. -->
                        </p>
                        <span class="in-prices">Price: &#8369;85.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Coke in can' onclick="otherDrinksArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Royal in can card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1 mccc-right">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Royal in can</h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="other-drinks royal-can-p">
                            <!-- Royal in can. -->
                        </p>
                        <span class="in-prices">Price: &#8369;85.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Royal in can' onclick="otherDrinksArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>

        <!-- Pineapple in can  card -->
        <a role="button" class="cards-anchor col-6">
            <div class="menu-categories-card-container flex-grow-1">
                <div class="mcc-ing-preview">
                    <div class="mcc-tilte-head">
                        <h1 class="mcc-title">Pineapple in can <br> <span class="del-monte-sub">(Del Monte)</span></h1>
                    </div>
                    <div class="mcc-ing">
                        <p class="other-drinks">
                            <!-- Pineapple in can. -->
                        </p>
                        <span class="in-prices">Price: &#8369;85.00</span>
                    </div>
                    <div class="add-list-con"><button class="add-list-btn" data-name='Pineapple in can (Del Monte)' onclick="otherDrinksArray(this)"><i class="fa-solid fa-clipboard-list"></i> Order</button></div>
                </div>
            </div>
        </a>
    </div>
</div>


<?php include 'includes-pages/footer.php'?>