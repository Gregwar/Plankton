<h2 class="text-muted">Hello</h2>

<p>
    Hello <?php echo htmlspecialchars($name); ?>!
</p>
<p>
    <a class="btn btn-primary" href="<?php echo path('hello'); ?>?name=Bob">Hello Bob</a>
    <a class="btn btn-primary" href="<?php echo path('hello'); ?>?name=Bruce">Hello Bruce</a>
    <a class="btn btn-primary" href="<?php echo path('hello'); ?>?name=Jack">Hello Jack</a>
    <a class="btn btn-primary" href="<?php echo path('hello'); ?>?name=Jhon">Hello Jhon</a>
</p>
