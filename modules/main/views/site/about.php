<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about" v-cloak>
    <h1><?= Html::encode($this->title) ?></h1>
    <h4>{{count}}</h4>
    <counter></counter>
    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>

<?php $this->beginBlock('script'); ?>
<script>
    const APP = {
        data() {
            return {
                count: 4
            }
        },
    }
</script>
<?php $this->endBlock(); ?>