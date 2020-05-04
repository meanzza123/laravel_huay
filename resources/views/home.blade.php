@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('member.sidebar')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">สูตรหวย</div>
                <div class="card-body">

                    <br />

                    <div class="row row-grid justify-content-between align-items-center text-left" style="box-shadow: 0 5px 5px -3px rgba(0, 0, 0, 0.2), 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12);
        padding:10px;border-radius:4px;">
                        <div class="card-body">
                            <!-- Tab panes -->
                            <div class="inputwrapper">
                                <h1 id="result"></h1>
                                <span class="numberinput"></span>
                                <span class="numberinput"></span>
                                <span class="numberinput"></span>
                                <span class="numberinput"></span>
                                <span class="numberinput"></span>
                            </div>
                            <div class="mainkeyboard">
                                <ul id="keyboard">
                                    <li class="letter">1</li>
                                    <li class="letter">2</li>
                                    <li class="letter">3</li>

                                    <li class="letter clearl">4</li>
                                    <li class="letter">5</li>
                                    <li class="letter">6</li>

                                    <li class="letter clearl">7</li>
                                    <li class="letter ">8</li>
                                    <li class="letter">0</li>
                                    <li class="letter clearl" id="del" style="width: 110px!important;">DEL</li>
                                    <li class="letter" style="width: 120px!important;">
                                        <</li> <!-- <button class="letter btn deafult" id="cal">Cal</button> -->
                                </ul>
                            </div>


                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script type="text/javascript" src="{{ URL::asset('/assets/js/core/jquery.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".letter").click(function() {
            var value = $(this).text();
            if (value !== "<") {
                $(".numberinput").each(function() {
                    var a = $(this).text();
                    if (!a) {
                        $(this).text(value);
                        // $(this).addClass("nocircle");
                        return false;
                    }
                });
            } else {
                $($(".numberinput").get().reverse()).each(function() {
                    var a = $(this).text();
                    if (a) {
                        $(this).text("");
                        // $(this).removeClass("nocircle");
                        return false;
                    }
                });
            }
        });


        $("#cal").click(function() {
            var value = $(".numberinput").text();
            // var num1 = ("0" + value.substring(0, 1)).slice(-2);
            var num1 = value.substring(0, 1);
            var num2 = value.substring(1, 2);
            var num3 = value.substring(2, 3);
            var num4 = value.substring(3, 4);
            var num5 = value.substring(4, 5);
            var resultSet1 = (parseInt(num1) + parseInt(num4));
            var resultSet2 = (parseInt(num3) + parseInt(num5));
            var resultSetSum = subNumber(resultSet1, resultSet2);
        });


        $("#del").click(function() {
            $($(".numberinput").get().reverse()).each(function() {
                var a = $(this).text();
                $(this).text("");
            });
        });
    });

    function subNumber(format1, format2) {
        var sum1, sum2, allsum;
        sum1 = format1;
        sum2 = format2;
        result = {
            res1: this.res1,
            res2: this.res2,
            re3: this.res3
        };
        if (format1.toString().length > 1) {
            sum1 = (parseInt(format1.toString().substring(0, 1))) + (parseInt(format1.toString().substring(1, 2)));
        }
        if (format2.toString().length > 1) {
            sum2 = (parseInt(format2.toString().substring(0, 1))) + (parseInt(format2.toString().substring(1, 2)));
        }
        allsum = sum1 + sum2;
        if (allsum.toString().length > 1) {
            allsum = (parseInt(allsum.toString().substring(0, 1))) + (parseInt(allsum.toString().substring(1, 2)));
            // alert(allsum);
            result = {
                res1: allsum = (parseInt(allsum)),
                res2: allsum = (parseInt(allsum + 1)),
                res3: allsum = (parseInt(allsum + 1))
            }
            alert(lastNumber(result.res3));
        } else {
            result = {
                res1: allsum = (parseInt(allsum)),
                res2: allsum = (parseInt(allsum + 1)),
                res3: allsum = (parseInt(allsum + 1))
            }
            alert(lastNumber(result.res1))
        }

    }

    function lastNumber(number) {
        return number.toString().length > 1 ? number.toString().substring(1, 2) : number.toString().substring(0, 1);
    }
</script>