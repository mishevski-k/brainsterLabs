<?php require APPROOT . "/views/includes/head.php" ?>
<div class="container">
    <?php require APPROOT . "/views/includes/nav.php" ?>
    <div class="main-container">
        <div class="banner">
            <h1>Вработи студенти</h1>
        </div>
        <div class="form-container">
            <form action="<?php echo URLROOT ?>/pages/hire" method="POST">
                <div class="form-item">
                    <label for="name-and-surname" class="form-label">Име и презиме</label>
                    <input type="text" class="form-input" name="name-and-surname" id="name-and-surname" placeholder="Име и презиме">
                    <p class="form-error"><?php echo $data['nameError'] ?></p>
                </div>
                <div class="form-item">
                    <label for="name-of-company" class="form-label">Име на компанија</label>
                    <input type="text" class="form-input" name="name-of-company" id="name-of-company" placeholder="Име на компанија">
                    <p class="form-error"><?php echo $data['companyError'] ?></p>
                </div>
                <div class="form-item">
                    <label for="email" class="form-label">Контант имаил</label>
                    <input type="email" class="form-input" name="email" id="email" placeholder="Контант имаил">
                    <p class="form-error"><?php echo $data['emailError'] ?></p>
                </div>
                <div class="form-item">
                    <label for="phone" class="form-label">Контант телефон</label>
                    <input type="phone" class="form-input" name="phone" id="phone" placeholder="Контант телефон">
                    <p class="form-error"><?php echo $data['phoneError'] ?></p>
                </div>
                <div class="form-item">
                    <label for="type-of-student" class="form-label">Тип на студент</label><br>
                    <div class="selected form-input">
                        Избери тип на студент
                    </div>
                    <p class="form-error"><?php echo $data['studentTypeError'] ?></p>
                    <div class="option-container">
                        <div class="option">
                            <input type="radio" class="radio" id="programming" name="type" value="programming">
                            <label for="programming" class="label">Студенти од програмирање</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="marketing" name="type" value="marketing">
                            <label for="marketing">Студенти од маркетинг</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="design" name="type" value="design">
                            <label for="design">Студенти од дизајн</label>
                        </div>
                    </div>
                </div>
                <div class="form-item">
                    <input type="submit" value="испрати" class="form-input form-btn">
                </div>
            </form>
        </div>
        
    </div>
    <?php require APPROOT . "/views/includes/footer.php" ?>
</div>