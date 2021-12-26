<!-- Created by Ariful Islam at 8/30/2021 - 11:59 PM -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" referrerpolicy="no-referrer"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <title>Good Health Form</title>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">মেডিমেট হেলথ প্যাক তালিকাভুক্তি ফর্ম</h3>
        </div>
    </div>
    <hr>

    <form id="inputform" class="form-group" action="{{route('health-statement.submit')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="enroll_id" value="{{ $enroll->id }}">

    <div class="row">
        <div class="col-md-6">
            <label for="">১) প্রতিষ্ঠানের নাম</label>
        </div>
        <div class="col-md-6">
            <input required data-index="1" type="text" class="form-control" name="employer_name">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="">২)পলিসি হোল্ডারের নাম </label>
        </div>
        <div class="col-md-6">
            <input required data-index="2" type="text" class="form-control" name="policy_holder_name">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="">৩) পেশা</label>
        </div>
        <div class="col-md-6">
            <input required data-index="3" type="text" class="form-control" name="designation">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="">৪) হেলথ আইডি নাম্বার</label>
        </div>
        <div class="col-md-6">
            <input required data-index="4" type="text" class="form-control" name="pf_no">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="">৫) বর্তমান ঠিকানা</label>
        </div>
        <div class="col-md-6">
            <input required data-index="5" type="text" class="form-control" name="current_address">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="">৬) পলিসি হোল্ডারের মোবাইল নং</label>
        </div>
        <div class="col-md-6">
            <input required data-index="5" type="text" class="form-control" name="mobile_no">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="">৭) জন্ম তারিখ</label>
        </div>
        <div class="col-md-6">
            <input required data-index="6" type="date" class="form-control" name="date_of_birth">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="">৮) লিঙ্গ</label>
        </div>
        <div class="col-md-6">
            <select name="sex" id="" class="form-control">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="">৯) বৈবাহিক অবস্থা</label>
        </div>
        <div class="col-md-6">
            <select name="marital_status" id="" class="form-control">
                <option value="Married">বিবাহিত</option>
                <option value="Unmarried">অবিবাহিত</option>
                <option value="Divorce/Others">তালাকপ্রাপ্ত / অন্যান্য</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="">১০) সন্তান সংখ্যা</label>
        </div>
        <div class="col-md-6">
            <input required data-index="7" type="text" class="form-control" name="no_children">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <label for="">১১) কোন নির্ভরশীলদের পরিকল্পনায় অন্তর্ভুক্ত করা হবে?. </label>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <textarea name="dependents" id="" cols="30" rows="10" class="summernote" data-index="1">
                 <table class="table table-bordered"><tbody><tr><td>নাম</td><td>জন্ম তারিখ</td><td>লিঙ্গ</td><td>সম্পর্ক</td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr></tbody></table>
            </textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="">১২)  কার জন্য কভারেজ:</label>
        </div>
        <div class="col-md-6">
            <select name="coverage_for" id="" class="form-control">
                <option value="Self">নিজের</option>
                <option value="Spouse">স্বামী/স্ত্রী</option>
                <option value="Family(Spouse & Children)">পরিবার</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="">১৩)  মাতৃত্বকালীন সুবিধা</label>
        </div>
        <div class="col-md-6">
            <select name="maternity_benefit" id="" class="form-control">
                <option value="Yes">হ্যাঁ</option>
                <option value="No">না</option>
            </select>
        </div>
    </div>

     <div class="row">
         <div class="col-md-12">
             <h4 class="text-center">Health Questionnaire</h4>
         </div>
     </div>

     <div class="row">
         <div class="col-md-12">
             <p class="text-justify">MediMate দ্বারা “বীমা ঝুঁকি” গ্রহণের আগে বিদ্যমান, বা বিদ্যমান ছিল এমন কোনো শর্ত, বা সংযুক্ত অবস্থার ক্ষেত্রে কোনো কভারেজ প্রযোজ্য হবে না, যদি না এটি MediMate- এর কাছে ঘোষণা করা হয় এবং MediMate কর্তৃক গৃহীত হয়। সুতরাং সঠিক ভাবে নিম্নে উল্লেখিত প্রশ্নের উত্তর দিন এবং সমস্ত তথ্য প্রদান করুন।
                 আপনার কোন উত্তর যদি "হ্যাঁ" হয়, তাহলে নীচে উল্লেখিত স্থানে বিস্তারিত লিখুন:
             </p>
             <p><b>বিগত পাঁচ বছরের মধ্যে, আপনি বা আপনার পরিবারের কোনো সদস্য নিম্নে উল্লেখিত কোন কারণে বীমার জন্য আবেদন করেছেন?</b></p>
         </div>
     </div>

        <div class="row">
            <div class="col-md-8">
                <label for="">(ক) কোন ধরণের অসুস্থতা, আঘাত, অক্ষমতা বা প্রতিবন্ধকতার কারণে দশ দিনের বেশি সময়ের জন্য অক্ষম ছিলেন</label>
            </div>
            <div class="col-md-4">
                <select name="twelve_a" id="" class="form-control">
                    <option value="No">না</option>
                    <option value="Yes">হ্যাঁ</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <label for=""> (খ) কোন ধরণের ডায়াগনসিস পরীক্ষা, এক্স-রে করানো অথবা অপারেশনের উদ্দেশ্যে কোন বিশেষজ্ঞের সাথে পরামর্শ করেছেন বা বহিরাগত রোগী হিসাবে কোন ক্লিনিকে যোগ দিয়েছেন </label>
            </div>
            <div class="col-md-4">
                <select name="twelve_b" id="" class="form-control">
                    <option value="No">না</option>
                    <option value="Yes">হ্যাঁ</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <label for=""> (গ) কোন শারিরীক প্রতিবন্ধকতা সম্পর্কে কোন ডাক্তারের সাথে পরামর্শ করেছেন যা আপনার মধ্যে এখনও বিদ্যমান বা আংশিক কোন প্রভাব রেখে গেছে? </label>
            </div>
            <div class="col-md-4">
                <select name="twelve_c" id="" class="form-control">
                    <option value="No">না</option>
                    <option value="Yes">হ্যাঁ</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <p><b>নিম্নে উল্লেখিত কোন কারণে আপনি বা আপনার পরিবারের কোনো সদস্য বর্তমানে বীমার জন্য আবেদন করছেন</b></p>
                <label for=""> (ক)  মারাত্মক কোন অসুখ, যখম, শারীরিক অক্ষমতা বা প্রতিবন্ধকতার উপসর্গ দেখা দিয়েছে বা আক্রান্ত হয়েছেন অথবা সন্দেহ প্রকাশ করে কোনও চিকিৎসা নিয়েছেন বা ওষুধ গ্রহণ করেছেন, অথবা বিশেষ কোন ডায়েট গ্রহণ করেছেন অথবা ডাক্তারের সাথে পরামর্শ করার পরিকল্পনা করছেন </label>
            </div>
            <div class="col-md-4">
                <br>
                <select name="twelve_d" id="" class="form-control">
                    <option value="No">না</option>
                    <option value="Yes">হ্যাঁ</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <p><b>যে কোনো সময়ে, আপনি বা আপনার পরিবারের কোনো সদস্য বীমার জন্য আবেদন করছেন</b></p>
                <label for=""> (ক) বিশেষ শর্তাবলী সাপেক্ষে কোনো বীমা কোম্পানির কর্তৃক আপনার জীবন বীমা পলিসির আবেদন স্থগিত, প্রত্যাখ্যান বা গ্রহণ করা হয়েছে?</label>
            </div>
            <div class="col-md-4">
                <br>
                <select name="twelve_e" id="" class="form-control">
                    <option value="No">না</option>
                    <option value="Yes">হ্যাঁ</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <label for=""> (খ) এই ফর্মটিতে আপনার বা আপনার পরিবারের কোনো সদস্যের স্বাস্থ্য সম্পর্কিত এমন কোনো অতিরিক্ত তথ্য আছে যা আপনার বিনা সংকোচে প্রকাশ করা উচিত? </label>
            </div>
            <div class="col-md-4">
                <select name="twelve_f" id="" class="form-control">
                    <option value="No">না</option>
                    <option value="Yes">হ্যাঁ</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p class="text-center font-weight-bold">আপনি যদি উপরের যে কোনো প্রশ্নের উত্তর "হ্যাঁ" দিয়ে থাকেন তাহলে পরবর্তী বিভাগটি সম্পূর্ণ করুনঃ</p>
                <p class="font-weight-bold"> ১৪) স্বাস্থ্য বিবৃতি </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <textarea  data-index="9" name="thirteen_a" id="" cols="30" rows="10" class="summernote">
                    <p>দশ দিন বা তার বেশি সময়ের জন্য আপনাকে অক্ষমতা সৃষ্টিকারী যে কোনো অবস্থার বিশদ বিবরণ উল্লেখ করুন যা গত পাঁচ বছরের মধ্যে ঘটেছে:</p>

                    <table class="table table-bordered"><tbody><tr><td>নাম</td><td>তারিখ</td><td>কারণ</td><td>বর্তমান পরিস্থিতি</td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr></tbody></table>
                </textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <textarea  data-index="10" name="thirteen_b" id="" cols="30" rows="10" class="summernote">
                    <p>গত পাঁচ বছরের মধ্যে ঘটেছে এমন যে কোন অবস্থার বিশদ বিবরণ উল্লেখ করুন যার জন্য আপনাকে বহিরাগত রোগী হিসেবে আপনার বিশেষজ্ঞ ডাক্তারের পরামর্শ গ্রহনের প্রয়োজন হয়েছে, বা হাসপাতালে ভর্তি হতে হয়েছেঃ</p>

                    <table class="table table-bordered"><tbody><tr><td>নাম</td><td>তারিখ</td><td>কারণ</td><td>বর্তমান পরিস্থিতি</td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr></tbody></table>
                </textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <textarea  data-index="11" name="thirteen_c" id="" cols="30" rows="10" class="summernote">
                    <p>বিগত পাঁচ বছরের মধ্যে যে কোনো ডাক্তারের পরামর্শের প্রয়োজন হয়েছে এমন কোনো শারিরীক অবস্থা বা কোন প্রতিবন্ধকতা যা এখনও বিদ্যমান বা এর অবশিষ্ট কোন প্রভাব আপনার উপর থেকে থাকলে তার বিশদ বিবরণঃ</p>
                    <table class="table table-bordered"><tbody><tr><td>নাম</td><td>তারিখ</td><td>কারণ</td><td>বর্তমান পরিস্থিতি</td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr></tbody></table>
                </textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <textarea  data-index="12" name="thirteen_d" id="" cols="30" rows="10" class="summernote">
                    <p>বর্তমান চিকিৎসার বিশদ বিবরণ, বা ওষুধ - বিশেষ খাদ্য গ্রহণ - অসুস্থতা, যখম, শারিরীক অক্ষমতা, বা প্রতিবন্ধকতা সম্পর্কিত কোন পরিচিত, স্পষ্ট বা সন্দেহজনক লক্ষণ থেকে থাকলে সেগুলির বিশদ বিবরণঃ</p>
                    <table class="table table-bordered"><tbody><tr><td>নাম</td><td>তারিখ</td><td>কারণ</td><td>বর্তমান পরিস্থিতি</td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr></tbody></table>
                </textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <textarea  data-index="13" name="thirteen_e" id="" cols="30" rows="10" class="summernote">
                    <p>বিশেষ শর্ত সাপেক্ষে আপনার কোনো বীমা আবেদনের কভারেজ স্থগিত, প্রত্যাখ্যান বা গৃহীত হয়ে থাকলে তার বিশদ বিবরণঃ</p>
                    <table class="table table-bordered"><tbody><tr><td>নাম</td><td>তারিখ</td><td>কারণ</td><td>বর্তমান পরিস্থিতি</td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr></tbody></table>
                </textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <textarea  data-index="14" name="thirteen_f" id="" cols="30" rows="10" class="summernote">
                    <p>বিনা সংকোচে স্বাস্থ্য সম্পর্কিত অতিরিক্ত যে কোনো তথ্যের বিশদ বিবরণ প্রকাশ করুনঃ</p>
                    <table class="table table-bordered"><tbody><tr><td>নাম</td><td>তারিখ</td><td>কারণ</td><td>বর্তমান পরিস্থিতি</td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr></tbody></table>
                </textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p class="font-weight-bold">১৫) ঘোষণা</p>
                <p>আমি ঘোষণা করছি যে এই আবেদনের বিবৃতিগুলি সম্পূর্ণ সত্য এবং পরিপূর্ণ। এই আবেদন ও ঘোষণাপত্র আমি এবং আমার নিয়োগকর্তার দ্বারা যৌথভাবে সম্পন্ন করেছি যা বীমা চুক্তির ভিত্তি হিসেবে গণ্য হবে।
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label for="Signature">Signature</label>
            </div>
            <div class="col-md-4">
                <input required data-index="15" type="file" name="signature">
            </div>
            <div class="col-md-4">
                <input required data-index="16" type="date" class="form-control" name="date">
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6 pull-right">
                <input required type="submit" name="submit" value="Submit Health Statement" class="btn btn-success pull-right">
            </div>
        </div>

        <hr>
        <br>


    </form>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('#inputform').on('keydown', 'input', function (event) {
            if (event.which == 13) {
                event.preventDefault();
                var $this = $(event.target);
                var index = parseFloat($this.attr('data-index'));
                $('[data-index="' + (index + 1).toString() + '"]').focus();
            }
        });


        $('.summernote').summernote();
    });
</script>

</body>
</html>
