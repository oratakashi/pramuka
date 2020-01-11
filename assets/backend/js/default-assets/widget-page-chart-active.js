! function () {
    "use strict";
    var e = AmCharts.makeChart("chartSummary1", {
            type: "pie",
            theme: "light",
            dataProvider: [{
                title: "Sales",
                value: 45,
                color: "#0178fa"
            }, {
                title: "Costs",
                value: 29,
                color: "#4ac6ec"
            }, {
                title: "Export",
                value: 45,
                color: "#1ecab7"
            }, {
                title: "Orders",
                value: 71,
                color: "#3da5f4"
            }],
            titleField: "title",
            valueField: "value",
            colorField: "color",
            labelRadius: 8,
            radius: "40%",
            innerRadius: "91%",
            labelText: "",
            balloon: {
                fixedPosition: !0
            }
        }),
        l = [{
            year: "2009",
            value: 18
        }, {
            year: "2010",
            value: 19
        }, {
            year: "2011",
            value: 21
        }, {
            year: "2012",
            value: 22
        }, {
            year: "2013",
            value: 23
        }, {
            year: "2014",
            value: 24
        }, {
            year: "2015",
            value: 22
        }, {
            year: "2016",
            value: 25
        }, {
            year: "2017",
            value: 28
        }, {
            year: "2018",
            value: 29
        }, {
            year: "2019",
            value: 30
        }],
        a = AmCharts.makeChart("chartPageVisit", {
            type: "serial",
            addClassNames: !0,
            defs: {
                filter: [{
                    x: "-50%",
                    y: "-50%",
                    width: "200%",
                    height: "200%",
                    id: "blur",
                    feGaussianBlur: {
                        in: "SourceGraphic",
                        stdDeviation: "30"
                    }
                }, {
                    id: "shadow",
                    x: "-10%",
                    y: "-10%",
                    width: "120%",
                    height: "120%",
                    feOffset: {
                        result: "offOut",
                        in: "SourceAlpha",
                        dx: "0",
                        dy: "20"
                    },
                    feGaussianBlur: {
                        result: "blurOut",
                        in: "offOut",
                        stdDeviation: "10"
                    },
                    feColorMatrix: {
                        result: "blurOut",
                        type: "matrix",
                        values: "0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 .2 0"
                    },
                    feBlend: {
                        in: "SourceGraphic",
                        in2: "blurOut",
                        mode: "normal"
                    }
                }]
            },
            fontSize: 14,
            dataProvider: l,
            dataDateFormat: "YYYY",
            autoMarginOffset: 0,
            marginRight: 0,
            categoryField: "year",
            categoryAxis: {
                color: "#fff",
                gridAlpha: 0,
                axisAlpha: 0,
                lineAlpha: 0,
                offset: -20,
                inside: !0,
                parseDates: !0,
                minPeriod: "YYYY"
            },
            chartCursor: {
                valueLineEnabled: !1,
                valueLineBalloonEnabled: !1,
                cursorAlpha: 0,
                zoomable: !1,
                cursorColor: "#fff",
                categoryBalloonColor: "#0178fa",
                valueZoomable: !1,
                valueLineAlpha: 0
            },
            valueAxes: [{
                fontSize: 0,
                inside: !0,
                gridAlpha: 0,
                axisAlpha: 0,
                lineAlpha: 0
            }],
            graphs: [{
                id: "g1",
                valueField: "value",
                type: "smoothedLine",
                lineColor: "#fff",
                fillColors: ["#0178fa", "transparent"],
                lineAlpha: 1,
                lineThickness: 5,
                fillAlphas: .3,
                showBalloon: !0,
                balloon: {
                    drop: !0,
                    adjustBorderColor: !1,
                    color: "#ffffff",
                    fillAlphas: .2,
                    bullet: "round",
                    bulletBorderAlpha: 1,
                    bulletSize: 5,
                    hideBulletsCount: 50,
                    lineThickness: 2,
                    useLineColorForBulletBorder: !0,
                    valueField: "value",
                    balloonText: "<span style='font-size:18px;'>[[value]]</span>"
                }
            }]
        });
    setTimeout(function () {
        a.zoomToIndexes(1, l.length - 5)
    }, 400), setTimeout(function () {
        m()
    }, 700), $(window).on("resize", function () {
        m()
    }), $("#mobile-collapse").on("click", function () {
        setTimeout(function () {
            m()
        }, 700)
    });
    for (var i = {
            AU: {
                latitude: -27,
                longitude: 133
            },
            BR: {
                latitude: -10,
                longitude: -55
            },
            BW: {
                latitude: -22,
                longitude: 24
            },
            IN: {
                latitude: 20,
                longitude: 77
            },
            KE: {
                latitude: 1,
                longitude: 38
            },
            MX: {
                latitude: 23,
                longitude: -102
            },
            MY: {
                latitude: 2.5,
                longitude: 112.5
            },
            NI: {
                latitude: 13,
                longitude: -85
            },
            NZ: {
                latitude: -41,
                longitude: 174
            },
            PH: {
                latitude: 13,
                longitude: 122
            },
            PL: {
                latitude: 52,
                longitude: 20
            },
            RU: {
                latitude: 60,
                longitude: 100
            },
            TH: {
                latitude: 15,
                longitude: 100
            },
            ZA: {
                latitude: -29,
                longitude: 24
            }
        }, o = [{
            code: "MX",
            name: "Mexico",
            value: 114793341,
            color: "#a389d4"
        }, {
            code: "BR",
            name: "Brazil",
            value: 196655014,
            color: "#4ac6ec"
        }, {
            code: "PL",
            name: "Poland",
            value: 38298949,
            color: "#f44236"
        }, {
            code: "KE",
            name: "Kenya",
            value: 41609728,
            color: "#6c5ce7"
        }, {
            code: "ZA",
            name: "South Africa",
            value: 50459978,
            color: "#f4c22b"
        }, {
            code: "RU",
            name: "Russia",
            value: 142835555,
            color: "#f4c22b"
        }, {
            code: "IN",
            name: "India",
            value: 241491960,
            color: "#4ac6ec"
        }, {
            code: "PH",
            name: "Philippines",
            value: 94852030,
            color: "#04a9f5"
        }, {
            code: "AU",
            name: "Australia",
            value: 22605732,
            color: "#6c5ce7"
        }, {
            code: "TH",
            name: "Thailand",
            value: 69518555,
            color: "#f44236"
        }, {
            code: "BW",
            name: "Botswana",
            value: 2030738,
            color: "#04a9f5"
        }, {
            code: "MY",
            name: "Malaysia",
            value: 28859154,
            color: "#A389D4"
        }, {
            code: "NZ",
            name: "New Zealand",
            value: 4414509,
            color: "#04a9f5"
        }, {
            code: "NI",
            name: "Nicaragua",
            value: 5869859,
            color: "#A389D4"
        }], r = 1 / 0, t = -1 / 0, s = 0; s < o.length; s++) {
        (h = o[s].value) < r && (r = h), h > t && (t = h)
    }
    var u = 9800 * Math.PI,
        n = 18 * Math.PI,
        d = [];
    for (s = 0; s < o.length; s++) {
        var h, c = o[s],
            v = ((h = c.value) - r) / (t - r) * (u - n) + n;
        v < n && (v = n);
        var f = Math.sqrt(v / (8 * Math.PI)),
            p = c.code;
        d.push({
            type: "circle",
            theme: "light",
            width: f,
            height: f,
            color: c.color,
            longitude: i[p].longitude,
            latitude: i[p].latitude,
            title: c.name + "</br> [ " + h + " ]",
            value: h
        })
    }
    AmCharts.makeChart("world-low", {
        type: "map",
        projection: "eckert6",
        dataProvider: {
            map: "worldLow",
            images: d
        },
        export: {
            enabled: !0
        }
    });
    var g = [{
            Year: "Jan",
            value: 50
        }, {
            Year: "Feb",
            value: 60
        }, {
            Year: "Mar",
            value: 55
        }, {
            Year: "Apr",
            value: 62
        }, {
            Year: "May",
            value: 55
        }, {
            Year: "Jun",
            value: 62
        }],
        y = AmCharts.makeChart("Chartline", {
            type: "serial",
            addClassNames: !0,
            defs: {
                filter: [{
                    x: "-50%",
                    y: "-50%",
                    width: "200%",
                    height: "200%",
                    id: "blur",
                    feGaussianBlur: {
                        in: "SourceGraphic",
                        stdDeviation: "30"
                    }
                }, {
                    id: "shadow",
                    x: "-10%",
                    y: "-10%",
                    width: "120%",
                    height: "120%",
                    feOffset: {
                        result: "offOut",
                        in: "SourceAlpha",
                        dx: "0",
                        dy: "20"
                    },
                    feGaussianBlur: {
                        result: "blurOut",
                        in: "offOut",
                        stdDeviation: "10"
                    },
                    feColorMatrix: {
                        result: "blurOut",
                        type: "matrix",
                        values: "0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 .2 0"
                    },
                    feBlend: {
                        in: "SourceGraphic",
                        in2: "blurOut",
                        mode: "normal"
                    }
                }]
            },
            fontSize: 15,
            dataProvider: g,
            autoMarginOffset: 0,
            marginRight: 0,
            categoryField: "Year",
            categoryAxis: {
                color: "#fff",
                gridAlpha: 0,
                axisAlpha: 0,
                lineAlpha: 0,
                offset: -20,
                minPeriod: "YYYY",
                inside: !0
            },
            valueAxes: [{
                fontSize: 0,
                inside: !0,
                gridAlpha: 0,
                axisAlpha: 0,
                lineAlpha: 0,
                minimum: 0,
                maximum: 80
            }],
            chartCursor: {
                valueLineEnabled: !1,
                valueLineBalloonEnabled: !1,
                cursorAlpha: 0,
                zoomable: !1,
                valueZoomable: !1,
                cursorColor: "#fff",
                categoryBalloonDateFormat: "YYYY",
                categoryBalloonColor: "#2466fd",
                valueLineAlpha: 0
            },
            graphs: [{
                id: "g1",
                type: "line",
                valueField: "value",
                bullet: "round",
                lineColor: "#ffffff",
                lineAlpha: 1,
                lineThickness: 3,
                fillAlphas: 0,
                showBalloon: !0,
                balloon: {
                    drop: !0,
                    adjustBorderColor: !1,
                    color: "#000",
                    fillAlphas: .2,
                    bullet: "round",
                    bulletBorderAlpha: 1,
                    bulletSize: 5,
                    hideBulletsCount: 50,
                    lineThickness: 2,
                    type: "smoothedLine",
                    useLineColorForBulletBorder: !0,
                    valueField: "value",
                    balloonText: "<span style='font-size:16px;'>[[value]]</span>"
                }
            }]
        });
    g = [{
        day: "Mon",
        value: 60
    }, {
        day: "Tue",
        value: 45
    }, {
        day: "Wed",
        value: 70
    }, {
        day: "Thu",
        value: 55
    }, {
        day: "Fri",
        value: 70
    }, {
        day: "Sat",
        value: 55
    }, {
        day: "Sun",
        value: 70
    }], y = AmCharts.makeChart("Widget-line-chart", {
        type: "serial",
        addClassNames: !0,
        defs: {
            filter: [{
                x: "-50%",
                y: "-50%",
                width: "200%",
                height: "200%",
                id: "blur",
                feGaussianBlur: {
                    in: "SourceGraphic",
                    stdDeviation: "30"
                }
            }, {
                id: "shadow",
                x: "-10%",
                y: "-10%",
                width: "120%",
                height: "120%",
                feOffset: {
                    result: "offOut",
                    in: "SourceAlpha",
                    dx: "0",
                    dy: "20"
                },
                feGaussianBlur: {
                    result: "blurOut",
                    in: "offOut",
                    stdDeviation: "10"
                },
                feColorMatrix: {
                    result: "blurOut",
                    type: "matrix",
                    values: "0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 .2 0"
                },
                feBlend: {
                    in: "SourceGraphic",
                    in2: "blurOut",
                    mode: "normal"
                }
            }]
        },
        fontSize: 15,
        dataProvider: g,
        autoMarginOffset: 0,
        marginRight: 0,
        categoryField: "day",
        categoryAxis: {
            color: "#fff",
            gridAlpha: 0,
            axisAlpha: 0,
            lineAlpha: 0,
            offset: -20,
            inside: !0
        },
        valueAxes: [{
            fontSize: 0,
            inside: !0,
            gridAlpha: 0,
            axisAlpha: 0,
            lineAlpha: 0,
            minimum: 0,
            maximum: 100
        }],
        chartCursor: {
            valueLineEnabled: !1,
            valueLineBalloonEnabled: !1,
            cursorAlpha: 0,
            zoomable: !1,
            valueZoomable: !1,
            cursorColor: "#fff",
            categoryBalloonColor: "#51b4e6",
            valueLineAlpha: 0
        },
        graphs: [{
            id: "g1",
            type: "line",
            valueField: "value",
            lineColor: "#ffffff",
            lineAlpha: 1,
            lineThickness: 3,
            fillAlphas: 0,
            showBalloon: !0,
            balloon: {
                drop: !0,
                adjustBorderColor: !1,
                color: "#ffffff",
                fillAlphas: .2,
                bullet: "round",
                bulletBorderAlpha: 1,
                bulletSize: 5,
                hideBulletsCount: 50,
                lineThickness: 2,
                useLineColorForBulletBorder: !0,
                valueField: "value",
                balloonText: "<span style='font-size:18px;'>[[value]]</span>"
            }
        }]
    }), g = [{
        day: "Mon",
        value: 60
    }, {
        day: "Tue",
        value: 50
    }, {
        day: "Wed",
        value: 59
    }, {
        day: "Thu",
        value: 55
    }, {
        day: "Fri",
        value: 65
    }, {
        day: "Sat",
        value: 55
    }, {
        day: "Sun",
        value: 70
    }], y = AmCharts.makeChart("Widget-line-chart1", {
        type: "serial",
        addClassNames: !0,
        defs: {
            filter: [{
                x: "-50%",
                y: "-50%",
                width: "200%",
                height: "200%",
                id: "blur",
                feGaussianBlur: {
                    in: "SourceGraphic",
                    stdDeviation: "30"
                }
            }, {
                id: "shadow",
                x: "-10%",
                y: "-10%",
                width: "120%",
                height: "120%",
                feOffset: {
                    result: "offOut",
                    in: "SourceAlpha",
                    dx: "0",
                    dy: "20"
                },
                feGaussianBlur: {
                    result: "blurOut",
                    in: "offOut",
                    stdDeviation: "10"
                },
                feColorMatrix: {
                    result: "blurOut",
                    type: "matrix",
                    values: "0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 .2 0"
                },
                feBlend: {
                    in: "SourceGraphic",
                    in2: "blurOut",
                    mode: "normal"
                }
            }]
        },
        fontSize: 15,
        dataProvider: g,
        autoMarginOffset: 0,
        marginRight: 0,
        categoryField: "day",
        categoryAxis: {
            color: "#393c40",
            gridAlpha: 0,
            axisAlpha: 0,
            lineAlpha: 0,
            offset: -20,
            inside: !0
        },
        valueAxes: [{
            fontSize: 0,
            inside: !0,
            gridAlpha: 0,
            axisAlpha: 0,
            lineAlpha: 0,
            minimum: 0,
            maximum: 100
        }],
        chartCursor: {
            valueLineEnabled: !1,
            valueLineBalloonEnabled: !1,
            cursorAlpha: 0,
            zoomable: !1,
            valueZoomable: !1,
            cursorColor: "#fff",
            categoryBalloonColor: "#23d3d7",
            valueLineAlpha: 0
        },
        graphs: [{
            id: "g1",
            type: "line",
            valueField: "value",
            lineColor: "#23d3d7",
            lineAlpha: 1,
            lineThickness: 3,
            fillAlphas: 0,
            showBalloon: !0,
            balloon: {
                drop: !0,
                adjustBorderColor: !1,
                color: "#ffffff",
                fillAlphas: .2,
                bullet: "round",
                bulletBorderAlpha: 1,
                bulletSize: 5,
                hideBulletsCount: 50,
                lineThickness: 2,
                useLineColorForBulletBorder: !0,
                valueField: "value",
                balloonText: "<span style='font-size:18px;'>[[value]]</span>"
            }
        }]
    }), l = [{
        year: "2001",
        bicycles: 55
    }, {
        year: "2002",
        bicycles: 40
    }, {
        year: "2003",
        bicycles: 50
    }], e = AmCharts.makeChart("Statistics-sale", {
        type: "serial",
        theme: "light",
        autoMargins: !1,
        addClassNames: !0,
        zoomOutText: "",
        defs: {
            filter: [{
                id: "shadow",
                width: "150%",
                height: "150%",
                feOffset: {
                    result: "offOut",
                    in: "SourceAlpha",
                    dx: "2",
                    dy: "2"
                },
                feGaussianBlur: {
                    result: "blurOut",
                    in: "offOut",
                    stdDeviation: "10"
                },
                feColorMatrix: {
                    result: "blurOut",
                    type: "matrix",
                    values: "0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 .2 0"
                },
                feBlend: {
                    in: "SourceGraphic",
                    in2: "blurOut",
                    mode: "normal"
                }
            }]
        },
        fontSize: 15,
        pathToImages: "../amcharts/images/",
        dataProvider: l,
        dataDateFormat: "YYYY",
        marginTop: 10,
        marginRight: 0,
        marginLeft: 0,
        autoMarginOffset: 5,
        categoryField: "year",
        categoryAxis: {
            gridAlpha: 0,
            axisAlpha: 0,
            startOnAxis: !0,
            tickLength: 0,
            color: "#fff",
            parseDates: !0,
            minPeriod: "YYYY",
            offset: 0,
            inside: !0
        },
        valueAxes: [{
            fontSize: 0,
            gridAlpha: 0,
            axisAlpha: 0,
            minimum: 0,
            maximum: 100
        }],
        graphs: [{
            id: "g3",
            title: "Bicycles",
            valueField: "bicycles",
            lineAlpha: 1,
            lineColor: "#FFFFFF",
            lineThickness: 3,
            bullet: "round",
            bulletBorderAlpha: 3,
            bulletAlpha: 1,
            bulletSize: 8,
            stackable: !1,
            bulletColor: "#04A5F5",
            bulletBorderColor: "#fff",
            bulletBorderThickness: 3,
            balloonText: "<div style='margin-bottom:30px;text-shadow: 2px 2px rgba(0, 0, 0, 0.1); font-weight:200;font-size:30px; color:#ffffff'>[[value]]</div>"
        }],
        chartCursor: {
            cursorAlpha: 1,
            fontSize: 0,
            zoomable: !1,
            cursorColor: "#fff",
            categoryBalloonColor: "#04A5F5",
            fullWidth: !0,
            categoryBalloonDateFormat: "YYYY",
            balloonPointerOrientation: "vertical"
        },
        balloon: {
            borderAlpha: 0,
            fillAlpha: 0,
            shadowAlpha: 0,
            offsetX: 40,
            offsetY: -50
        }
    });
    setTimeout(function () {
        e.zoomToIndexes(1, l.length - 2)
    }, 400);
    e = AmCharts.makeChart("Stack-bar", {
        type: "serial",
        theme: "light",
        dataProvider: [{
            year: "Jan",
            visits: 6378,
           color: "#0178fa"
        }, {
            year: "Feb",
            visits: 8596,
           color: "#0178fa"
        }, {
            year: "Mar",
            visits: 8459,
           color: "#0178fa"
        }, {
            year: "Apr",
            visits: 9659,
           color: "#0178fa"
        }, {
            year: "May",
            visits: 3352,
           color: "#0178fa"
        }, {
            year: "Jun",
            visits: 8975,
           color: "#0178fa"
        }, {
            year: "Jul",
            visits: 1029,
           color: "#0178fa"
        }, {
            year: "Aug",
            visits: 3698,
           color: "#0178fa"
        }, {
            year: "Sep",
            visits: 9875,
           color: "#0178fa"
        }, {
            year: "Oct",
            visits: 7852,
           color: "#0178fa"
        }, {
            year: "Nov",
            visits: 6325,
           color: "#0178fa"
        }, {
            year: "Dec",
            visits: 4589,
           color: "#0178fa"
        }],
        valueAxes: [{
            gridAlpha: 0,
            axisAlpha: 0,
            lineAlpha: 0,
            fontSize: 0
        }],
        startDuration: 1,
        graphs: [{
            balloonText: "<b>[[category]]: [[value]]</b>",
            fillColorsField: "color",
            fillAlphas: .9,
            lineAlpha: .2,
            columnWidth: .4,
            type: "column",
            valueField: "visits"
        }],
        chartCursor: {
            categoryBalloonEnabled: !1,
            cursorAlpha: 0,
            zoomable: !1
        },
        categoryField: "year",
        categoryAxis: {
            gridPosition: "start",
            gridAlpha: 0,
            axisAlpha: 0,
            lineAlpha: 0
        }
    }), e = AmCharts.makeChart("Stack-age", {
        type: "serial",
        theme: "light",
        dataProvider: [{
            age: "<20",
            visits: 348,
            color: ["#0178fa"]
        }, {
            age: "25",
            visits: 567,
            color: ["#0178fa"]
        }, {
            age: "30",
            visits: 658,
            color: ["#0178fa"]
        }, {
            age: "35",
            visits: 786,
            color: ["#0178fa"]
        }, {
            age: "40",
            visits: 598,
            color: ["#0178fa"]
        }, {
            age: "45",
            visits: 364,
            color: ["#0178fa"]
        }, {
            age: "50",
            visits: 431,
            color: ["#0178fa"]
        }, {
            age: "55",
            visits: 639,
            color: ["#0178fa"]
        }, {
            age: "60",
            visits: 458,
            color: ["#0178fa"]
        }, {
            age: "65",
            visits: 365,
            color: ["#0178fa"]
        }, {
            age: ">70",
            visits: 220,
            color: ["#0178fa"]
        }],
        valueAxes: [{
            gridAlpha: 0,
            axisAlpha: 0,
            lineAlpha: 0,
            fontSize: 0
        }],
        startDuration: 1,
        graphs: [{
            balloonText: "<b>[[category]]: [[value]]</b>",
            fillColorsField: "color",
            fillAlphas: .9,
            lineAlpha: .2,
            columnWidth: .2,
            type: "column",
            valueField: "visits"
        }],
        chartCursor: {
            categoryBalloonEnabled: !1,
            cursorAlpha: 0,
            zoomable: !1
        },
        categoryField: "age",
        categoryAxis: {
            gridPosition: "start",
            gridAlpha: 0,
            axisAlpha: 0,
            lineAlpha: 0
        }
    }), e = AmCharts.makeChart("line-area2", {
        type: "serial",
        theme: "light",
        marginTop: 10,
        marginRight: 0,
        dataProvider: [{
            year: "Jan",
            value: 5,
            value2: 80
        }, {
            year: "Feb",
            value: 30,
            value2: 95
        }, {
            year: "Mar",
            value: 25,
            value2: 87
        }, {
            year: "Apr",
            value: 55,
            value2: 155
        }, {
            year: "May",
            value: 45,
            value2: 140
        }, {
            year: "Jun",
            value: 65,
            value2: 147
        }, {
            year: "Jul",
            value: 60,
            value2: 130
        }, {
            year: "Aug",
            value: 105,
            value2: 180
        }, {
            year: "Sep",
            value: 80,
            value2: 160
        }, {
            year: "Oct",
            value: 110,
            value2: 175
        }, {
            year: "Nov",
            value: 120,
            value2: 165
        }, {
            year: "Dec",
            value: 150,
            value2: 200
        }],
        valueAxes: [{
            axisAlpha: 0,
            position: "left"
        }],
        graphs: [{
            id: "g1",
            balloonText: "[[category]]<br><b><span style='font-size:14px;'>[[value]]</span></b>",
            bullet: "round",
            lineColor: "#4ac6ec",
            lineThickness: 3,
            negativeLineColor: "#4ac6ec",
            valueField: "value"
        }, {
            id: "g2",
            balloonText: "[[category]]<br><b><span style='font-size:14px;'>[[value]]</span></b>",
            bullet: "round",
            lineColor: "#10adf5",
            lineThickness: 3,
            negativeLineColor: "#10adf5",
            valueField: "value2"
        }],
        chartCursor: {
            cursorAlpha: 0,
            valueLineEnabled: !0,
            valueLineBalloonEnabled: !0,
            valueLineAlpha: .3,
            fullWidth: !0
        },
        categoryField: "year",
        categoryAxis: {
            minorGridAlpha: 0,
            minorGridEnabled: !0,
            gridAlpha: 0,
            axisAlpha: 0,
            lineAlpha: 0
        },
        legend: {
            useGraphSettings: !0,
            position: "top"
        }
    }), e = AmCharts.makeChart("bar-chart", {
        type: "serial",
        theme: "light",
        dataProvider: [{
            catagory: "Sport",
            visits: 5236,
           color: "#0178fa"
        }, {
            catagory: "Music",
            visits: 7895,
            color: ["#a389d4", "#899ed4"]
        }, {
            catagory: "Travel",
            visits: 3654,
            color: ["#04a9f5", "#049df5"]
        }, {
            catagory: "News",
            visits: 10985,
            color: ["#f44236", "#f48f36"]
        }],
        valueAxes: [{
            gridAlpha: 0,
            axisAlpha: 0,
            lineAlpha: 0,
            fontSize: 0
        }],
        startDuration: 1,
        graphs: [{
            balloonText: "<b>[[category]]: [[value]]</b>",
            fillColorsField: "color",
            fillAlphas: .9,
            lineAlpha: 0,
            columnWidth: .2,
            type: "column",
            valueField: "visits"
        }],
        chartCursor: {
            categoryBalloonEnabled: !1,
            cursorAlpha: 0,
            zoomable: !1
        },
        categoryField: "catagory",
        categoryAxis: {
            gridPosition: "start",
            gridAlpha: 0,
            axisAlpha: 0,
            lineAlpha: 0
        }
    }), e = AmCharts.makeChart("bar-chart1", {
        type: "serial",
        theme: "light",
        dataProvider: [{
            Average: "0-1",
            value: 53,
           color: "#0178fa"
        }, {
            Average: "1-4",
            value: 13,
            color: ["#a389d4", "#899ed4"]
        }, {
            Average: "8-24",
            value: 30,
            color: ["#04a9f5", "#049df5"]
        }, {
            Average: ">24",
            value: 4,
            color: ["#f44236", "#f48f36"]
        }],
        valueAxes: [{
            gridAlpha: 0,
            axisAlpha: 0,
            lineAlpha: 0,
            fontSize: 0
        }],
        startDuration: 1,
        graphs: [{
            balloonText: "<b>[[category]]: [[value]]</b>",
            labelPosition: "top",
            labelText: "[[value]]",
            fillColorsField: "color",
            fillAlphas: .9,
            lineAlpha: 0,
            type: "column",
            valueField: "value"
        }],
        chartCursor: {
            categoryBalloonEnabled: !1,
            cursorAlpha: 0,
            zoomable: !1
        },
        categoryField: "Average",
        categoryAxis: {
            gridPosition: "start",
            gridAlpha: 0,
            axisAlpha: 0,
            lineAlpha: 0
        }
    }), e = AmCharts.makeChart("line-chart1", {
        type: "serial",
        theme: "light",
        marginTop: 10,
        marginRight: 0,
        dataProvider: [{
            year: "Jan",
            value: 65,
            value2: 125,
            value3: 175
        }, {
            year: "Feb",
            value: 105,
            value2: 80,
            value3: 190
        }, {
            year: "Mar",
            value: 145,
            value2: 30,
            value3: 160
        }, {
            year: "Apr",
            value: 105,
            value2: 70,
            value3: 190
        }, {
            year: "May",
            value: 145,
            value2: 110,
            value3: 140
        }, {
            year: "Jun",
            value: 185,
            value2: 150,
            value3: 100
        }],
        valueAxes: [{
            axisAlpha: 0,
            position: "left"
        }],
        graphs: [{
            id: "g1",
            balloonText: "[[category]]<br><b><span style='font-size:14px;'>[[value]]</span></b>",
            bullet: "false",
            lineColor: "#2cd929",
            lineThickness: 3,
            negativeLineColor: "#2cd929",
            type: "smoothedLine",
            valueField: "value"
        }, {
            id: "g2",
            balloonText: "[[category]]<br><b><span style='font-size:14px;'>[[value]]</span></b>",
            bullet: "false",
            lineColor: "#29bdf5",
            lineThickness: 3,
            negativeLineColor: "#29bdf5",
            type: "smoothedLine",
            valueField: "value2"
        }, {
            id: "g3",
            balloonText: "[[category]]<br><b><span style='font-size:14px;'>[[value]]</span></b>",
            bullet: "false",
            lineColor: "#fdda08",
            lineThickness: 3,
            negativeLineColor: "#fdda08",
            type: "smoothedLine",
            valueField: "value3"
        }],
        chartCursor: {
            cursorAlpha: 0,
            valueLineEnabled: !0,
            valueLineBalloonEnabled: !0,
            valueLineAlpha: .5,
            fullWidth: !0
        },
        categoryField: "year",
        categoryAxis: {
            minorGridAlpha: .1,
            minorGridEnabled: !0,
            gridAlpha: 0,
            axisAlpha: 0,
            lineAlpha: 0
        },
        legend: {
            useGraphSettings: !0,
            position: "top"
        }
    }), e = AmCharts.makeChart("line-chart2", {
        type: "serial",
        theme: "light",
        marginTop: 10,
        marginRight: 0,
        dataProvider: [{
            year: "Jan",
            value: 160,
            value2: 85
        }, {
            year: "Feb",
            value: 140,
            value2: 95
        }, {
            year: "Mar",
            value: 150,
            value2: 90
        }, {
            year: "Apr",
            value: 95,
            value2: 125
        }, {
            year: "May",
            value: 130,
            value2: 105
        }, {
            year: "Jun",
            value: 55,
            value2: 120
        }, {
            year: "Jul",
            value: 75,
            value2: 110
        }, {
            year: "Aug",
            value: 65,
            value2: 140
        }, {
            year: "Sep",
            value: 140,
            value2: 100
        }, {
            year: "oct",
            value: 120,
            value2: 95
        }, {
            year: "Nov",
            value: 110,
            value2: 130
        }, {
            year: "Dec",
            value: 180,
            value2: 80
        }],
        valueAxes: [{
            axisAlpha: 0,
            minimum: 0,
            maximum: 200,
            position: "left"
        }],
        graphs: [{
            id: "g1",
            balloonText: "[[category]]<br><b><span style='font-size:14px;'>[[value]]</span></b>",
            bullet: "round",
            bulletBorderAlpha: 2,
            bulletAlpha: 1,
            bulletSize: 12,
            stackable: !1,
            bulletColor: "#fff",
            bulletBorderColor: "#a389d4",
            bulletBorderThickness: 3,
            lineColor: "#a389d4",
            lineThickness: 2,
            type: "smoothedLine",
            valueField: "value"
        }, {
            id: "g2",
            balloonText: "[[category]]<br><b><span style='font-size:14px;'>[[value]]</span></b>",
            bullet: "round",
            bulletBorderAlpha: 2,
            bulletAlpha: 1,
            bulletSize: 12,
            stackable: !1,
            bulletColor: "#fff",
            bulletBorderColor: "#1ddcc8",
            bulletBorderThickness: 3,
            lineColor: "#1ddcc8",
            lineThickness: 2,
            type: "smoothedLine",
            valueField: "value2"
        }],
        chartCursor: {
            cursorAlpha: 0,
            valueLineEnabled: !0,
            valueLineBalloonEnabled: !0,
            valueLineAlpha: .5,
            fullWidth: !0
        },
        categoryField: "year",
        categoryAxis: {
            minorGridAlpha: 0,
            minorGridEnabled: !0,
            gridAlpha: 0,
            axisAlpha: 0,
            lineAlpha: 0
        },
        legend: {
            useGraphSettings: !0,
            position: "top"
        }
    }), e = AmCharts.makeChart("bar-chart2", {
        type: "serial",
        theme: "light",
        marginTop: 10,
        marginRight: 0,
        valueAxes: [{
            id: "v1",
            position: "left",
            axisAlpha: 0,
            lineAlpha: 0,
            autoGridCount: !1,
            labelFunction: function (e) {
                return +Math.round(e) + "00"
            }
        }],
        graphs: [{
            id: "g1",
            valueAxis: "v1",
            lineColor: ["#00b894"],
            fillColors: ["#00b894"],
            fillAlphas: 1,
            type: "column",
            title: "SALES",
            valueField: "sales",
            columnWidth: .3,
            legendValueText: "$[[value]]M",
            balloonText: "[[title]]<br /><b style='font-size: 130%'>$[[value]]M</b>"
        }, {
            id: "g2",
            valueAxis: "v1",
            lineColor: ["#6c5ce7"],
            fillColors: ["#6c5ce7"],
            fillAlphas: 1,
            type: "column",
            title: "VISITS ",
            valueField: "visits",
            columnWidth: .3,
            legendValueText: "$[[value]]M",
            balloonText: "[[title]]<br /><b style='font-size: 130%'>$[[value]]M</b>"
        }, {
            id: "g3",
            valueAxis: "v1",
            lineColor: ["#00cec9"],
            fillColors: ["#00cec9"],
            fillAlphas: 1,
            type: "column",
            title: "CLICKS",
            valueField: "clicks",
            columnWidth: .3,
            legendValueText: "$[[value]]M",
            balloonText: "[[title]]<br /><b style='font-size: 130%'>$[[value]]M</b>"
        }],
        chartCursor: {
            pan: !0,
            valueLineEnabled: !0,
            valueLineBalloonEnabled: !0,
            cursorAlpha: 0,
            valueLineAlpha: .2
        },
        categoryField: "Year",
        categoryAxis: {
            dashLength: 1,
            gridAlpha: 0,
            axisAlpha: 0,
            lineAlpha: 0,
            minorGridEnabled: !0
        },
        legend: {
            useGraphSettings: !0,
            position: "top"
        },
        balloon: {
            borderThickness: 1,
            shadowAlpha: 0
        },
        dataProvider: [{
            Year: "2014",
            sales: 2,
            visits: 4,
            clicks: 3
        }, {
            Year: "2015",
            sales: 4,
            visits: 7,
            clicks: 5
        }, {
            Year: "2016",
            sales: 2,
            visits: 3,
            clicks: 4
        }, {
            Year: "2017",
            sales: 4.5,
            visits: 6,
            clicks: 4
        }]
    }), e = AmCharts.makeChart("bar-chart3", {
        type: "serial",
        theme: "light",
        marginTop: 10,
        marginRight: 0,
        valueAxes: [{
            id: "v1",
            position: "left",
            gridAlpha: 0,
            axisAlpha: 0,
            lineAlpha: 0,
            autoGridCount: !1,
            labelFunction: function (e) {
                return +Math.round(e) + "00"
            }
        }],
        graphs: [{
            id: "g1",
            valueAxis: "v1",
            lineColor: ["#4ac6ec", "#6c5ce7"],
            fillColors: ["#4ac6ec", "#6c5ce7"],
            fillAlphas: 1,
            type: "column",
            title: "Last Week ",
            valueField: "sales2",
            columnWidth: .2,
            legendValueText: "$[[value]]M",
            balloonText: "[[title]]<br /><b style='font-size: 130%'>$[[value]]M</b>"
        }, {
            id: "g2",
            valueAxis: "v1",
            lineColor: ["#a389d4", "#899ed4"],
            fillColors: ["#a389d4", "#899ed4"],
            fillAlphas: 1,
            type: "column",
            title: "Market Place ",
            valueField: "sales1",
            columnWidth: .2,
            legendValueText: "$[[value]]M",
            balloonText: "[[title]]<br /><b style='font-size: 130%'>$[[value]]M</b>"
        }],
        chartCursor: {
            pan: !0,
            valueLineEnabled: !0,
            valueLineBalloonEnabled: !0,
            cursorAlpha: 0,
            valueLineAlpha: .2
        },
        categoryField: "date",
        categoryAxis: {
            dashLength: 1,
            gridAlpha: 0,
            axisAlpha: 0,
            lineAlpha: 0,
            minorGridEnabled: !0
        },
        legend: {
            useGraphSettings: !0,
            position: "top"
        },
        balloon: {
            borderThickness: 1,
            shadowAlpha: 0
        },
        dataProvider: [{
            date: "Q1",
            sales1: 4.5,
            sales2: 5.5
        }, {
            date: "Q2",
            sales1: 5,
            sales2: 6.5
        }, {
            date: "Q3",
            sales1: 6.5,
            sales2: 5.5
        }, {
            date: "Q4",
            sales1: 6,
            sales2: 7
        }]
    }), e = AmCharts.makeChart("device-chart", {
        type: "pie",
        theme: "light",
        labelRadius: -35,
        labelText: "[[percents]]%",
        dataProvider: [{
            device: "Tablet",
            percentage: 30,
            color: "#16a085"
        }, {
            device: "Mobile",
            percentage: 15,
            color: "#04a9f5"
        }, {
            device: "Others",
            percentage: 15,
            color: "#8e44ad"
        }, {
            device: "Desktop",
            percentage: 40,
            color: "#f1c40f"
        }],
        valueField: "percentage",
        titleField: "device",
        colorField: "color",
        balloon: {
            fixedPosition: !0
        }
    }), e = AmCharts.makeChart("chart-sale", {
        type: "pie",
        theme: "light",
        dataProvider: [{
            title: "Sales",
            value: 1483,
            color: "#6c5ce7"
        }, {
            title: "Refund",
            value: 61,
            color: "#d63031"
        }],
        titleField: "title",
        valueField: "value",
        colorField: "color",
        labelRadius: 30,
        radius: "40%",
        innerRadius: "91%",
        labelText: "",
        balloon: {
            fixedPosition: !0
        }
    });
    var A = [{
            year: "1999",
            value: 30
        }, {
            year: "2000",
            value: 55
        }, {
            year: "2001",
            value: 80
        }, {
            year: "2002",
            value: 60
        }, {
            year: "2003",
            value: 100
        }, {
            year: "2004",
            value: 70
        }],
        b = AmCharts.makeChart("command-card-chart1", {
            type: "serial",
            addClassNames: !0,
            defs: {
                filter: [{
                    x: "-50%",
                    y: "-50%",
                    width: "200%",
                    height: "200%",
                    id: "blur",
                    feGaussianBlur: {
                        in: "SourceGraphic",
                        stdDeviation: "30"
                    }
                }, {
                    id: "shadow",
                    x: "-10%",
                    y: "-10%",
                    width: "120%",
                    height: "120%",
                    feOffset: {
                        result: "offOut",
                        in: "SourceAlpha",
                        dx: "0",
                        dy: "20"
                    },
                    feGaussianBlur: {
                        result: "blurOut",
                        in: "offOut",
                        stdDeviation: "10"
                    },
                    feColorMatrix: {
                        result: "blurOut",
                        type: "matrix",
                        values: "0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 .2 0"
                    },
                    feBlend: {
                        in: "SourceGraphic",
                        in2: "blurOut",
                        mode: "normal"
                    }
                }]
            },
            fontSize: 15,
            dataProvider: A,
            dataDateFormat: "YYYY",
            autoMarginOffset: 0,
            marginRight: 0,
            categoryField: "year",
            categoryAxis: {
                color: "#fff",
                gridAlpha: 0,
                axisAlpha: 0,
                lineAlpha: 0,
                offset: -20,
                inside: !0,
                parseDates: !0,
                minPeriod: "YYYY"
            },
            chartCursor: {
                valueLineEnabled: !1,
                valueLineBalloonEnabled: !1,
                cursorAlpha: 0,
                zoomable: !1,
                cursorColor: "#fff",
                categoryBalloonColor: "#04a9f5",
                valueZoomable: !1,
                valueLineAlpha: 0
            },
            valueAxes: [{
                fontSize: 0,
                inside: !0,
                gridAlpha: 0,
                axisAlpha: 0,
                lineAlpha: 0,
                minimum: 0,
                maximum: 150
            }],
            graphs: [{
                id: "g1",
                valueField: "value",
                type: "smoothedLine",
                lineColor: "#04a9f5",
                fillColors: ["#23b7e5"],
                lineAlpha: 1,
                lineThickness: 5,
                fillAlphas: 1,
                showBalloon: !0,
                balloon: {
                    drop: !0,
                    adjustBorderColor: !1,
                    color: "#ffffff",
                    fillAlphas: .2,
                    bullet: "round",
                    bulletBorderAlpha: 1,
                    bulletSize: 5,
                    hideBulletsCount: 50,
                    lineThickness: 2,
                    useLineColorForBulletBorder: !0,
                    valueField: "value",
                    balloonText: "<span style='font-size:18px;'>[[value]]</span>"
                }
            }]
        });
    setTimeout(function () {
        b.zoomToIndexes(1, A.length - 2)
    }, 400);
    g = [{
        year: "2000",
        value: 55
    }, {
        year: "2001",
        value: 45
    }, {
        year: "2002",
        value: 60
    }, {
        year: "2003",
        value: 80
    }, {
        year: "2004",
        value: 70
    }, {
        year: "2005",
        value: 55
    }], y = AmCharts.makeChart("call-chart", {
        type: "serial",
        addClassNames: !0,
        defs: {
            filter: [{
                x: "-50%",
                y: "-50%",
                width: "200%",
                height: "200%",
                id: "blur",
                feGaussianBlur: {
                    in: "SourceGraphic",
                    stdDeviation: "30"
                }
            }, {
                id: "shadow",
                x: "-10%",
                y: "-10%",
                width: "120%",
                height: "120%",
                feOffset: {
                    result: "offOut",
                    in: "SourceAlpha",
                    dx: "0",
                    dy: "20"
                },
                feGaussianBlur: {
                    result: "blurOut",
                    in: "offOut",
                    stdDeviation: "10"
                },
                feColorMatrix: {
                    result: "blurOut",
                    type: "matrix",
                    values: "0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 .2 0"
                },
                feBlend: {
                    in: "SourceGraphic",
                    in2: "blurOut",
                    mode: "normal"
                }
            }]
        },
        fontSize: 15,
        dataProvider: g,
        autoMarginOffset: 0,
        marginRight: 0,
        categoryField: "year",
        categoryAxis: {
            color: "#fff",
            gridAlpha: 0,
            axisAlpha: 0,
            lineAlpha: 0,
            offset: -20,
            inside: !0,
            parseDates: !0,
            minPeriod: "YYYY"
        },
        valueAxes: [{
            fontSize: 0,
            inside: !0,
            gridAlpha: 0,
            axisAlpha: 0,
            lineAlpha: 0,
            minimum: 0,
            maximum: 100
        }],
        chartCursor: {
            valueLineEnabled: !1,
            valueLineBalloonEnabled: !1,
            cursorAlpha: 0,
            zoomable: !1,
            valueZoomable: !1,
            cursorColor: "#fff",
            categoryBalloonColor: "#95ead5",
            valueLineAlpha: 0
        },
        graphs: [{
            id: "g1",
            type: "smoothedLine",
            valueField: "value",
            fillColors: ["#4ac6ec", "#6c5ce7"],
            lineAlpha: 0,
            fillAlphas: 1,
            showBalloon: !0,
            balloon: {
                drop: !0,
                adjustBorderColor: !1,
                color: "#ffffff",
                fillAlphas: .2,
                bullet: "round",
                bulletBorderAlpha: 1,
                bulletSize: 5,
                hideBulletsCount: 50,
                lineThickness: 2,
                useLineColorForBulletBorder: !0,
                valueField: "value",
                balloonText: "<span style='font-size:14px;'>[[value]]</span>"
            }
        }]
    });
    setTimeout(function () {
        y.zoomToIndexes(1, g.length - 2)
    }, 400);
    l = [{
        year: "2011",
        value: 30
    }, {
        year: "2012",
        value: 55
    }, {
        year: "2013",
        value: 80
    }, {
        year: "2014",
        value: 60
    }, {
        year: "2015",
        value: 70
    }, {
        year: "2016",
        value: 70
    }, {
        year: "2017",
        value: 110
    }, {
        year: "2018",
        value: 90
    }, {
        year: "2019",
        value: 130
    }], e = AmCharts.makeChart("Earnings-chart", {
        type: "serial",
        addClassNames: !0,
        defs: {
            filter: [{
                x: "-50%",
                y: "-50%",
                width: "200%",
                height: "200%",
                id: "blur",
                feGaussianBlur: {
                    in: "SourceGraphic",
                    stdDeviation: "30"
                }
            }, {
                id: "shadow",
                x: "-10%",
                y: "-10%",
                width: "120%",
                height: "120%",
                feOffset: {
                    result: "offOut",
                    in: "SourceAlpha",
                    dx: "0",
                    dy: "20"
                },
                feGaussianBlur: {
                    result: "blurOut",
                    in: "offOut",
                    stdDeviation: "10"
                },
                feColorMatrix: {
                    result: "blurOut",
                    type: "matrix",
                    values: "0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 .2 0"
                },
                feBlend: {
                    in: "SourceGraphic",
                    in2: "blurOut",
                    mode: "normal"
                }
            }]
        },
        fontSize: 14,
        dataProvider: l,
        dataDateFormat: "YYYY",
        autoMarginOffset: 0,
        marginRight: -1,
        marginBottom: -2,
        categoryField: "year",
        categoryAxis: {
            color: "#fff",
            gridAlpha: 0,
            axisAlpha: 0,
            lineAlpha: 0,
            offset: -20,
            inside: !0,
            parseDates: !0,
            minPeriod: "YYYY"
        },
        chartCursor: {
            valueLineEnabled: !1,
            valueLineBalloonEnabled: !1,
            cursorAlpha: 0,
            zoomable: !1,
            cursorColor: "#fff",
            categoryBalloonColor: "#0178fa",
            valueZoomable: !1,
            valueLineAlpha: 0
        },
        valueAxes: [{
            fontSize: 0,
            inside: !0,
            gridAlpha: 0,
            axisAlpha: 0,
            lineAlpha: 0
        }],
        graphs: [{
            id: "g1",
            type: "line",
            valueField: "value",
            fillColors: ["#e1b12c", "#e1b12c"],
            lineColor: "#0178fa",
            balloon: {
                drop: !0,
                adjustBorderColor: !0,
                color: "#ffffff",
                type: "smoothedLine"
            },
            lineAlpha: 2,
            lineThickness: 10,
            fillAlphas: 1,
            showBalloon: !0
        }]
    });

    function m() {
        $(function () {})
    }
}();