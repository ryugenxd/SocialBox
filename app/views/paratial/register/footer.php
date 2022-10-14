  <!-- footer-->
    <footer class="bg-dark">
      <t class="text-white">
        © Copyright <?=date('Y');?>
      </t>
   </footer>
  <!--akhir footer
    <script src="//cdn.jsdelivr.net/npm/eruda"></script>
    <script>eruda.init();</script>
  -->
    <script src="<?=BASE_URL;?>/js/script.js"></script>
    <script src="<?=BASE_URL;?>/js/sweetalert2.all.min.js"></script>
    <?Flasher::flash();?>
    </body>
</html>