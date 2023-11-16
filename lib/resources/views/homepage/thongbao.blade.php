@extends('layout.home')
@section('title', 'Thông báo tuyển dụng viên chức năm 2023')
@section('main')

<div class=" p-t-100 p-b-140" style="margin-top:30px">
    <div class="container">
        <div class="row" style="">
            <div class="col-xs-12">
                <a href="{{asset('/')}}" style="color: #5f6468;">Trang chủ</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                <a href="{{asset('/')}}" style="color: #5f6468;">Tin tức</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                <a href="{{asset('/thongbao')}}" style="color: #881A1A;">Thông báo</a>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-9">
                <div class="panel" style="padding: 10px;">
                    <div class="panel-title">
                        <a href="{{asset('/hoatdong')}}" style="color: white;"> <b>THÔNG BÁO</b></a>
                    </div>
                    <div class="panel-content">
                        <div class="content-title">
                            <b> Thông báo tuyển dụng viên chức năm 2023 </b>
                        </div>
                        <div class="content">
                            <p style="text-align: center;"><b>THÔNG BÁO</b></p>
                            <p style="text-align: center;"><b>tuyển dụng viên chức năm 2023</b></p>
                            <p>Thực hiện Kế hoạch công tác năm 2023, Học viện Chính trị khu vực IV thông báo tuyển dụng viên chức năm 2023, cụ thể như sau:</p>
                            <p><b>1. Đối tượng, điều kiện, tiêu chuẩn ứng viên tuyển dụng</b></p>
                            <p><b>1.1. Đối tượng</b></p>
                            <p>- Ứng viên đăng ký tham gia dự tuyển phải có đủ điều kiện, tiêu chuẩn về phẩm chất, chuyên môn nghiệp vụ, năng lực theo yêu cầu của vị trí việc làm và chức danh nghề nghiệp đăng ký dự tuyển; có đủ các điều kiện đăng ký dự tuyển quy định tại Điều 22, Luật Viên chức.</p>
                            <p>- Những ứng viên trước khi đăng ký dự tuyển đã có thời gian tham gia công tác tại các cơ quan, đơn vị ít nhất 5 năm: yêu cầu có bản tự nhận xét, đánh giá và được người sử dụng lao động đánh giá hoàn thành tốt nhiệm vụ được giao trở lên. Trong thời gian công tác không vi phạm pháp luật đến mức bị xử lý kỷ luật hoặc bị truy cứu trách nhiệm hình sự, đáp ứng được ngay yêu cầu vị trí, việc làm cần dự tuyển.</p>
                            <p><b>1.2. Điều kiện</b></p>
                            <p><i>1.2.1. Ứng viên có đủ các điều kiện sau đây không phân biệt dân tộc, nam nữ, thành phần xã hội được đăng ký dự tuyển viên chức</i></p>
                            <p>- Có quốc tịch Việt Nam và cư trú tại Việt Nam; <br> - Từ đủ 18 tuổi đến dưới 45 tuổi; <br> - Có lý lịch rõ ràng, không có tiền án, tiền sự; <br>
                                - Có phẩm chất đạo đức, ý chí phấn đấu tốt;<br> - Có trình độ, năng lực đáp ứng yêu cầu của vị trí dự tuyển;<br> - Có sức khỏe tốt, ngoại hình phù hợp làm việc trong môi trường sư phạm.</p>
                            <p><i>1.2.2. Những người sau đây không được đăng ký dự tuyển</i></p>
                            <p>- Mất năng lực hành vi dân sự hoặc bị hạn chế năng lực hành vi dân sự. <br>- Đang bị truy cứu trách nhiệm hình sự; đang chấp hành bản án, quyết định về hình sự của Tòa án; đang bị áp dụng biện pháp xử lý hành chính đưa vào cơ sở chữa bệnh, cơ sở giáo dục, trường giáo dưỡng.</p>
                            <p><b>1.3. Tiêu chuẩn</b></p>
                            <p><i> 1.3.1. Tiêu chuẩn chung</i></p>
                            <p>- Trung thành với Tổ quốc Việt Nam. Có bản lĩnh chính trị vững vàng, phẩm chất đạo đức tốt; chấp hành nghiêm đường lối, chủ trương của Đảng, chính sách, pháp luật của Nhà nước. <br>
                                - Tận tụy, khách quan, trung thực, cầu thị; tâm huyết với sự nghiệp giáo dục, đào tạo, nghiên cứu khoa học và sự nghiệp phát triển của Học viện. <br>
                                - Có trình độ chuyên môn, lý luận chính trị, quản lý nhà nước, nghiệp vụ chuyên môn, tin học, ngoại ngữ đáp ứng yêu cầu nhiệm vụ được giao; có năng lực nghiên cứu khoa học, tổng kết thực tiễn; kết hợp lý luận với thực tiễn trong giảng dạy và nghiên cứu. <br>
                                - Không vi phạm các nội dung của Quy định số 58-QĐ/TW ngày 08/02/2022 của Bộ Chính trị về “Một số vấn đề về công tác bảo vệ chính trị nội bộ Đảng”. <br>
                                - Có kỹ năng, nghiệp vụ chuyên môn và sức khỏe tốt. <br>
                                - Có khả năng sư phạm, không nói ngọng, không nói lắp, bảo đảm các yêu cầu ngoại hình.</p>
                            <p><i> 1.3.2. Tiêu chuẩn về trình độ, năng lực</i></p>
                            <p> - Sử dụng được 01 ngoại ngữ đáp ứng yêu cầu nhiệm vụ vị trí việc làm (tương đương bậc 2 (A2) theo quy định tại Thông tư số 01/2014/TT-BGDĐT ngày 24/01/2014 của Bộ Giáo dục và Đào tạo ban hành Khung năng lực ngoại ngữ 6 bậc dùng cho Việt Nam hoặc có chứng chỉ ngoại ngữ trình độ B (được cấp trước ngày 16/3/2014) trở lên. <br>
                                - Trình độ tin học đạt chuẩn kỹ năng sử dụng công nghệ thông tin cơ bản theo quy định tại Thông tư số 03/2013/TT-BTTTT ngày 11/3/2014 và Thông tư liên tịch số 17/2016/TTLT-BGDĐT-BTTTT ngày 21/6/2016 của Bộ Giáo dục đào tạo và Bộ Thông tin truyền thông quy định tổ chức thi và cấp chứng chỉ ứng dụng công nghệ thông tin hoặc chứng chỉ B tin học (được cấp trước thời điểm Thông tư này có hiệu lực áp dụng). <br>
                                - Có chứng chỉ nghiệp vụ sư phạm hoặc chứng chỉ phương pháp giảng dạy tích cực và có năng lực nghiên cứu khoa học, tổng kết thực tiễn đối với giảng viên.</p>
                            <p><b>3. Hình thức, nội dung tuyển dụng</b></p>
                            <p><b>3.1. Hình thức tuyển dụng</b></p>
                            <p> Hình thức tuyển dụng: thi tuyển theo quy định về tuyển dụng công chức, viên chức ban hành kèm theo Quyết định số 1437/QĐ-HVCT-HCQG ngày 02/5/2013 của Giám đốc Học viện Chính trị - Hành chính quốc gia Hồ Chí Minh (nay là Học viện Chính trị quốc gia Hồ Chí Minh).</p>
                            <p><b>3.2. Nội dung tuyển dụng</b></p>
                            <p>- Vòng 1: Thi kiểm tra kiến thức chung, gồm có: <br>+ Phần I: Kiến thức chung; <br>+ Phần II: Ngoại ngữ; <br>+ Phần III: Tin học.<br>
                                - Vòng 2: Thi môn nghiệp vụ chuyên ngành: <br>+ Đối với vị trí chuyên viên: thi phỏng vấn kết hợp thi viết kiểm tra nghiệp vụ, kỹ năng soạn thảo văn bản. <br>+ Đối với vị trí giảng viên: ứng viên soạn giảng 01 bài trong chương trình Cao cấp lý luận chính trị ở chuyên ngành tham gia dự tuyển và thi thực hành giảng bài trên lớp 02 tiết đã soạn (01 tiết tự chọn và 01 tiết chỉ định của Hội đồng). <br>
                                - Nếu là viên chức có thời gian công tác trên 5 năm, đảm bảo hồ sơ yêu cầu theo qui định được miễn thi Vòng 1.</p>
                            <p><b>Lưu ý:</b></p>
                            <p> - Toàn bộ hồ sơ được bỏ vào 01 túi đựng hồ sơ. Hồ sơ không được tẩy xoá. Các bản sao đều phải có chứng thực của cơ quan có thẩm quyền theo quy định. Các bản sao tại hồ sơ không trả lại và không sử dụng để thực hiện việc dự tuyển lần sau. <br>
                                - Trường hợp người trúng tuyển có hành vi gian lận trong việc kê khai hồ sơ đăng ký dự tuyển hoặc Học viện phát hiện người trúng tuyển sử dụng văn bằng, chứng chỉ không đúng quy định thì Giám đốc Học viện ra quyết định hủy kết quả trúng tuyển và có văn bản báo cáo Giám đốc Học viện Chính trị quốc gia Hồ Chí Minh theo quy định, đồng thời thông báo công khai trên phương tiện thông tin đại chúng hoặc trên trang thông tin điện tử của Học viện và không tiếp nhận hồ sơ dự tuyển trong kỳ tuyển dụng tiếp theo. <br>
                                - Người tham gia dự tuyển chịu trách nhiệm trước pháp luật về nội dung hồ sơ dự tuyển do mình kê khai.
                            </p>
                        </div>
                    </div>
                    <div class="panel-ft">
                        <div class="panel-title">
                            <a href="{{asset('/hoatdong')}}" style="color: white;"> <b>TIN TỨC LIÊN QUAN</b></a>
                        </div>
                        <ul style="padding-top: 10px;">
                            <li class="ft-li"><a href="{{asset('/sukien')}}">Trường Chính trị tỉnh Cà Mau tổ chức Hội nghị công bố quyết định</a></li>
                            <li class="ft-li"><a href="">Lễ ra mắt cuốn sách của Tổng Bí thư về đấu tranh phòng, chống tham nhũng, tiêu cực</a></li>
                            <li class="ft-li"><a href="">Bế mạc Hội thi Giảng viên giỏi cấp Học viện lần thứ V – năm 2023</a></li>
                            <li class="ft-li"><a href="">Bí thư thứ hai Đại sứ quán Úc thăm và làm việc với Học viện Chính trị khu vực IV</a></li>
                            <li class="ft-li"><a href="">Bảo đảm thượng tôn Hiến pháp và pháp luật</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- right -->
            <div class="col-xs-3">
                <div class="panel">
                    <div class="panel-body">
                        <form action="">
                            <input type="text" name="keyword" placeholder="Từ khóa tìm kiếm..." value="{{request()->keyword}}">
                            <button type="submit" class="btn-new" style="margin-top: 10px;">Tìm kiếm</button>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading"><b><i class="fa fa-newspaper-o" aria-hidden="true"></i> Tin tức sự kiện</b></div>
                    <div class="scroll">
                        <ul class="home-scroll">
                            <li> <a href="{{asset('/sukien')}}">Trường Chính trị tỉnh Cà Mau tổ chức Hội nghị công bố quyết định</a></li>
                            <li> <a href="">Bảo đảm thượng tôn Hiến pháp và pháp luật</a></li>
                            <li> <a href="{{asset('/thongtin')}}" title="Trường Đại học An ninh nhân dân – 60 năm xây dựng và phát triển">Trường Đại học An ninh nhân dân – 60 năm xây dựng và phát triển</a></li>
                            <li> <a href="">Lễ công bố quyết định của Ban Bí thư Trung ương đảng về công tác cán bộ</a></li>
                            <li> <a href="">Khai mạc Hội nghị Trung ương giữa nhiệm kỳ</a></li>
                            <li> <a href="">Bế mạc Hội thi Giảng viên giỏi cấp Học viện lần thứ V – năm 2023</a></li>
                            <li> <a href="">Lễ ra mắt cuốn sách của Tổng Bí thư về đấu tranh phòng, chống tham nhũng, tiêu cực</a></li>
                            <li> <a href="">Sự lãnh đạo của Đảng trong Tổng khởi nghĩa Cách mạng Tháng Tám: tầm nhìn, quyết sách và hành động</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading"><b><i class="fa fa-bell" aria-hidden="true"></i> Thông báo</b></div>
                    <div class="scroll">
                        <ul class="home-scroll">
                            <li> <a href="">Thông báo tuyển dụng viên chức năm 2023</a></li>
                            <li> <a href="">Thông báo tuyển dụng nhân viên</a></li>
                            <li> <a href="">Thông báo về việc thực hiện một số quy định của học viên</a></li>
                            <li> <a href="">Thông báo Tuyển sinh đào tạo trình độ Thạc sĩ năm 2023</a></li>
                            <li> <a href="">Thông báo Tuyển sinh cao học năm 2023 (bổ sung chuyên ngành tuyển sinh)</a></li>
                            <li> <a href="">Thông báo về việc đảm bảo đào tạo trong công tác đào tạo</a></li>
                            <li> <a href="">Thông báo về việc đảm bảo kỷ luật, kỷ cương trong công tác đào tạo</a></li>
                            <li> <a href="">Thông báo về việc đảm bảo kỷ luật, kỷ cương trong công tác đào tạo</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading"><b><i class="fa fa-file-text" aria-hidden="true"></i> Văn bản quản lý</b></div>
                    <div class="scroll">
                        <ul class="home-scroll">
                            <li> <a href="">Kế hoạch Tổ chức tiếp sinh và khai giảng năm học mới các Lớp Cao cấp LLCT hệ tập trung K16</a></li>
                            <li> <a href="">Quyết định về việc ban hành Quy chế Tuyển sinh và Đào tạo Cao cấp lý luận chính trị</a></li>
                            <li> <a href="">Tuyển dụng nhân viên kỹ thuật điện - nước</a></li>
                            <li> <a href="">Thông báo tuyển sinh đào tạo trình độ cao học năm 2022</a></li>
                            <li> <a href="">Thông báo về việc tổ chức giảng dạy và học tập đối với các hệ lớp Cao cấp lý luận chính trị</a></li>
                            <li> <a href="">Thông báo tuyển dụng nhân viên kỹ thuật</a></li>
                            <li> <a href="">Thông báo tuyển dụng nhân viên ký túc xá</a></li>
                            <li> <a href="">Thông báo về việc đảm bảo kỷ luật, kỷ cương trong công tác đào tạo</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading"><b> <i class="fa fa-location-arrow" aria-hidden="true"></i> Liên hệ</b></div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <table>
                                <tr style="border-bottom: 2px dotted #ddd;">
                                    <td><b>Địa chỉ:</b> Số 6 Nguyễn Văn Cừ (nối dài), phường An Bình, quận Ninh Kiều, thành phố Cần Thơ</td>
                                </tr>
                                <tr style="border-bottom: 2px dotted #ddd;">
                                    <td><b>Email:</b> hcma4@hcma4.vn</td>
                                </tr>
                                <tr>
                                    <td><b>Liên hệ:</b> 0292.3889818</td>
                                </tr>
                            </table>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop