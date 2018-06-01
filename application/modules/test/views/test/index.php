<?
use app\components\Helper;
?>
<div class="test-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
    <p>
        You may customize this page by editing the following file:<br>
        <code><?= __FILE__ ?></code>
    </p>
</div>
<?
//echo \yii\helpers\Url::toRoute(['edit', 'id' => 3]);
echo \yii\helpers\Url::toRoute(['/test/test2', 'id' => 2]);
?>
