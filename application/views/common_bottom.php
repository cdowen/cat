  <!--bottom-->
    <div class="bottom">
      <div class="bottom-item">
        <a href="#">关于我们</a>
        &nbsp;|&nbsp;
        <a href="#">加入我们</a>
        &nbsp;|&nbsp;
        <a href="#">联系我们</a>
        &nbsp;|&nbsp;
        <a href="#">留&nbsp;&nbsp;言</a>
        </div>
        <div class="bottom-line">
        .......................
        </div>
        <div class="bottom-w">
        Powered by bitNP Tech.
        </div>
    </div>
    <!--bottom end-->
    <?php if (isset($jses)): ?>
<?php foreach ($jses as $js): ?>
<script type="text/javascript" src="<?php echo $js; ?>"></script>
<?php endforeach; ?>
<?php endif; ?>
    </div>
    </body>
    </html>