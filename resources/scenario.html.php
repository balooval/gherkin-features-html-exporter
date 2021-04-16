<?php
declare(strict_types=1);
/** @var ScenarioNode $scenario */

use Behat\Gherkin\Node\ScenarioNode;

assert($scenario instanceof ScenarioNode);

?>
<div class="scenario">
    <div class="scenario-title">
        <span class="keyword"><?php echo $this->escape($scenario->getKeyword()); ?></span> <span class="title"><?php echo $this->escape($scenario->getTitle()); ?></span>
    </div>
    <div class="steps">
        <?php
        foreach ($scenario->getSteps() as $step) {
            require __DIR__ . '/step.html.php';
        }
        ?>
    </div>
</div>
