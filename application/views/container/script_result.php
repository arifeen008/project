<script type="text/javascript" src=<?php echo base_url('mdb5pro/js/mdb.min.js') ?>></script>
<script type="text/javascript" src="https://counter4.optistats.ovh/private/counter.js?c=1wrapynwcwcsad47zfjfdme3eyy932su&down=async" async></script>
<noscript><a href="https://www.freecounterstat.com"><img src="https://counter4.optistats.ovh/private/freecounterstat.php?c=1wrapynwcwcsad47zfjfdme3eyy932su"></a></noscript>
<script>
  const memberBar = {
    type: 'bar',
    data: {
      labels: ['กระบี่', 'คลองยาง', 'อ่าวลึก', 'กาญจนดิษฐ์', 'คลองท่อม', 'ห้วยลึก', 'เกาะลันตา'],
      datasets: [{
        label: 'จำนวนสมาชิก',
        data: [3120, 1956, 1792, 2217, 1119, 1422, 1727],
        // backgroundColor : 'black',
        // borderColor :'white'
      }]
    },
  };
  const optionmemberBar = {
    options: {
      title: {
        display: true,
        text: "ยอดสมาชิกสหกรณ์",
        fontSize: 25,
        fontColor: 'black'
      }
    }
  }

  const accountmemberBar = {
    type: 'bar',
    data: {
      labels: ['กระบี่', 'คลองยาง', 'อ่าวลึก', 'กาญจนดิษฐ์', 'คลองท่อม', 'ห้วยลึก', 'เกาะลันตา'],
      datasets: [{
        label: 'ทำได้',
        data: [97, 24, 7, 16, 4, 39, 55],
      }],
    },
  };
  const optionaccountmemberBar = {
    options: {
      title: {
        display: true,
        text: "สมาชิกปีบัญชี 2566",
        fontSize: 25,
        fontColor: 'black'
      }
    }
  }

  const sharedBar = {
    type: 'bar',
    data: {
      labels: ['กระบี่', 'คลองยาง', 'อ่าวลึก', 'กาญจนดิษฐ์', 'คลองท่อม', 'ห้วยลึก', 'เกาะลันตา'],
      datasets: [{
        label: 'เป้าเงิน',
        data: [116000, 617200, 311430, 1898800, 116850, 1081000, 2298910],
      }],
    },
  };
  const optionsharedBar = {
    options: {
      title: {
        display: true,
        text: "ทุนเรือนหุ้นปีบัญชี 2566",
        fontSize: 25,
        fontColor: 'black'
      }
    }
  }

  const educationBar = {
    type: 'bar',
    data: {
      labels: ['กระบี่', 'คลองยาง', 'อ่าวลึก', 'กาญจนดิษฐ์', 'คลองท่อม', 'ห้วยลึก', 'เกาะลันตา'],
      datasets: [{
        label: 'เป้าเงิน',
        data: [170100, 512900, 113800, 36200, 56400, 215500, 128900],
      }],
    },
  };
  const optioneducationBar = {
    options: {
      title: {
        display: true,
        text: "เงินฝากประเภทเพี่อการศึกษา ระยะเวลา 1 ปี ปีบัญชี 2566",
        fontSize: 25,
        fontColor: 'black'
      }
    }
  }

  const hadjumrahBar = {
    type: 'bar',
    data: {
      labels: ['กระบี่', 'คลองยาง', 'อ่าวลึก', 'กาญจนดิษฐ์', 'คลองท่อม', 'ห้วยลึก', 'เกาะลันตา'],
      datasets: [{
        label: 'เป้าเงิน',
        data: [-122874, -26100, -78150, -55071, -216853, 84805, 445900],
      }],
    },
  };
  const optionhadjumrahBar = {
    options: {
      title: {
        display: true,
        text: " เงินฝากประเภทฮัจญ์และอุมเราะห์ ระยะเวลา 1 ปี ปีบัญชี 2566",
        fontSize: 25,
        fontColor: 'black'
      }
    }
  }

  new mdb.Chart(document.getElementById('member-balance'), memberBar, optionmemberBar);
  new mdb.Chart(document.getElementById('target-member'), accountmemberBar, optionaccountmemberBar);
  new mdb.Chart(document.getElementById('shared-bar'), sharedBar, optionsharedBar);
  new mdb.Chart(document.getElementById('education-bar'), educationBar, optioneducationBar);
  new mdb.Chart(document.getElementById('hadjumrah-bar'), hadjumrahBar, optionhadjumrahBar);
</script>