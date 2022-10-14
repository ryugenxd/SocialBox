  <!-- footer-->
    <footer class="bg-dark position-fixed fixed-bottom">
      <t class="text-white">
        © Copyright <?=date('Y');?>
      </t>
   </footer>
  <!--akhir footer
    <script src="//cdn.jsdelivr.net/npm/eruda"></script>
    <script>eruda.init();</script>
  -->
    <script src="<?=BASE_URL;?>/js/profile/script.js"></script>
    <script src="<?=BASE_URL;?>/js/bootstrap.bundle.js"></script>
    <script src="<?=BASE_URL;?>/js/sweetalert2.all.min.js"></script>
    <?Flasher::flash();?>
    </body>
</html>