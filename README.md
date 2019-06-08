YII2 Eruda 移动端调试工具

只有在移动端才会开启

```php
<?php if (!YII_ENV_PROD) {
    echo \huijiewei\eruda\ErudaWidget::widget();
} ?>
```