<?php require APPROOT . "/views/includes/head.php" ?>
<div class="container">
    <?php require APPROOT . "/views/includes/nav.php" ?>
    <div class="main-container">
        <div class="banner">
            <h1>Brainster labs</h1>
        </div>
        <div class="filter-container">
            <button class="filter" id="marketing-filter">Проекти на студенти по академија за маркетинг</button>
            <button class="filter" id="programming-filter">Проекти на студенти по академија за програмирање</button>
            <button class="filter" id="design-filter">Проекти на студенти по академија за design</button>
        </div> 
        <div class="card-container">
            <?php foreach($data['projects'] as $project): ?>
                <?php if($project->card_category === "Академија за маркетинг"){
                    $category = "marketing";
                } elseif($project->card_category === "Академија за програмирање") {
                    $category = "programming";
                } elseif($project->card_category === "Академија за дизајн") {
                    $category = "design";
                } ?>
                <div class="card <?php echo $category ?>">
                    <div class="card-banner">
                        <img src="<?php echo URLROOT . "/public/img/" . $project->card_banner . ".jpg" ?>" alt="project-img">
                    </div>
                    <div class="card-main">
                        <div class="card-category">
                            <p><?php echo $project->card_category ?></p>
                        </div>
                        <div class="card-title">
                            <p><?php echo $project->card_title ?></p>
                        </div>
                        <div class="card-desc">
                            <p><?php echo $project->card_desc ?></p>
                        </div>
                        <div class="card-date">
                            <p><?php echo $project->card_date ?></p>
                        </div>
                        <div class="card-button">
                            <button class="danger">Дознај повеќе</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?> 
        </div>
    </div>
    <?php require APPROOT . "/views/includes/footer.php" ?>
</div>
