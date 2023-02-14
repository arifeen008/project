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
        backgroundColor: ["rgba(66,133,244,1)", "rgba(66,133,244,1)",
          "rgba(66,133,244,1)", "rgba(66,133,244,1)",
          "rgba(67,135,244,1)", "rgba(66,133,244,1)", "rgba(66,133,244,1)"
        ],
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
        backgroundColor: ["rgba(66,133,244,1)", "rgba(66,133,244,1)",
          "rgba(66,133,244,1)", "rgba(66,133,244,1)",
          "rgba(67,135,244,1)", "rgba(66,133,244,1)", "rgba(66,133,244,1)"
        ],
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
        backgroundColor: ["rgba(66,133,244,1)", "rgba(66,133,244,1)",
          "rgba(66,133,244,1)", "rgba(66,133,244,1)",
          "rgba(67,135,244,1)", "rgba(66,133,244,1)", "rgba(66,133,244,1)"
        ],
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
        backgroundColor: ["rgba(66,133,244,1)", "rgba(66,133,244,1)",
          "rgba(66,133,244,1)", "rgba(66,133,244,1)",
          "rgba(67,135,244,1)", "rgba(66,133,244,1)", "rgba(66,133,244,1)"
        ],
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
        backgroundColor: ["rgba(66,133,244,1)", "rgba(66,133,244,1)",
          "rgba(66,133,244,1)", "rgba(66,133,244,1)",
          "rgba(67,135,244,1)", "rgba(66,133,244,1)", "rgba(66,133,244,1)"
        ],
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

  const istigomahBar = {
    type: "bar",
    data: {
      labels: ["กระบี่", "คลองยาง", "อ่าวลึก", "กาญจนดิษฐ์", "คลองท่อม", "ห้วยลึก", "เกาะลันตา"],
      datasets: [{
        label: "ทำได้",
        data: [-13691000, -270000, 3203500, 497000, 200000, 290000, -730000],
        backgroundColor: ["rgba(66,133,244,1)", "rgba(66,133,244,1)",
          "rgba(66,133,244,1)", "rgba(66,133,244,1)",
          "rgba(67,135,244,1)", "rgba(66,133,244,1)", "rgba(66,133,244,1)"
        ],
      }, ],
    },
  };

  const optionistigomahBar = {
    options: {
      title: {
        display: true,
        text: "เงินฝากประเกทอิส12 และ24 ระยะเวลา 1 ปี ปีบัญชี 2566",
        fontSize: 25,
        fontColor: 'black'
      }
    }
  }

  const takafulBar = {
    type: "bar",
    data: {
      labels: ["กระบี่", "คลองยาง", "อ่าวลึก", "กาญจนดิษฐ์", "คลองท่อม",
        "ห้วยลึก", "เกาะลันตา"
      ],
      datasets: [{
        label: "รวม 4 ไตรมาส",
        data: [1027, 562, 1264, 395, 306, 445, 375],
        backgroundColor: ["rgba(66,133,244,1)", "rgba(66,133,244,1)",
          "rgba(66,133,244,1)", "rgba(66,133,244,1)",
          "rgba(67,135,244,1)", "rgba(66,133,244,1)", "rgba(66,133,244,1)"
        ],
      }, ],
    },
  };

  const optiontakafulBar = {
    options: {
      title: {
        display: true,
        text: "ตะกาฟุล 2566 นับเฉพาะสมาชิกสามัญ",
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
  new mdb.Chart(document.getElementById('istigomah-bar'), istigomahBar, optionistigomahBar);
  new mdb.Chart(document.getElementById('takaful-bar'), takafulBar, optiontakafulBar);
</script>