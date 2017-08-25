<!doctype html>
<html>
  <heaD>
    <title>is it Tuesday ? </title>
  </heaD>
</html>




<script type="text/javascript">
      var today = new Date();
      var wkday = today.getDay();
      function tuesday() {
        if (wkday == 2) {
          document.write('<h1 class="yes">YES</h1>');
        }
        else {
          document.write('<h1 class="no">NO</h1>');
        }
      }
      function checkday() {
        var newtoday = new Date();
        var newwkday = newtoday.getDay();
        if (wkday == 1 && newwkday == 2) {
          location.reload();
        }
        if (wkday == 2 && newwkday == 3) {
          location.reload();
        }
      }
      setInterval('checkday()', 1000);
      tuesday();
    </script>