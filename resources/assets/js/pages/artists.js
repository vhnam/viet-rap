import React from 'react';
import ReactDOM from 'react-dom';

import ArtistCover from './../components/Artist/ArtistCover';
import ArtistProfile from './../components/Artist/ArtistProfile';
import Header from '../components/Header/Header';
import Footer from './../components/Footer/Footer';

ReactDOM.render(<Header page="page-artists" />, document.getElementById('header'));
ReactDOM.render(<Footer />, document.getElementById('footer'));
ReactDOM.render(<ArtistCover name="DSK" photo="https://i.pinimg.com/originals/64/2a/5d/642a5d2be8b93da557d6ab41c90732c8.jpg" background="https://vignette.wikia.nocookie.net/rapvietunderground/images/f/f3/1.jpg/revision/latest?cb=20180403185755&path-prefix=vi" />, document.getElementById('cover'));
ReactDOM.render(<ArtistProfile name="DSK" profile="DSK, tên thật là Nguyễn Đức Minh, sinh ngày 23/11/1987. DSK có nghĩa là Da Sun Kid (The Sun Kid) hay Die Sonnen Kinder (tiếng Đức), được hiểu là: đứa con của mặt trời. DSK sinh ra và lớn lên tại Hà Nội, sau đó sống ở Sài Gòn, năm 13 tuổi theo gia đình sang sinh sống và định cư tại Cộng Hoà Liên Bang Đức. DSK có một niềm đam mê bất tận với nhạc rap - anh cũng tự nhận mình là 1 rap fan, ngoài ra DSK còn những sở thích khác như trượt ván, vẽ vời/graffiti, làm beat…<br />“Một khi nó đã là đam mê thì là cả đời, không phải là 1 giai đoạn hay sự là thích thú nhất thời. Mình đơn giản rất là yêu nó như là cách để mình kể những câu chuyện riêng của mình. Mình cảm thấy quan trọng nhất là cái sự thật trong từng câu hát” - DSK chia sẻ trong “Independent Artist”<br />DSK bắt đầu rap từ cuối năm 2004 đầu 2005. Tính tới thời điểm hiện tại 2017, DSK đã sống với rap nói chung và rap Việt Nam nói riêng ngót ngét đã 13 năm rồi. Cái tên DSK xuất hiện lần đầu tiên trên diễn đàn Rap Club năm 2004-2005 - một cộng đồng khá nổi tiếng (tuy ra đời sau Viet Rapper nhưng Rap Club vẫn là diễn đàn hoạt động âm nhạc Rap/Hip-Hop rất mạnh và tiêu biểu thời bấy giờ) và là nơi đã từng hội tụ các bậc lão làng của Việt Rap, có thể kể đến những cái tên như Lil' Knight, NamCt, Cá Chép, Eddy Việt, Lil BK, Chíp Nhỏ, Young Uno ... và nhiều nghệ sĩ khác của GVR trước khi tách ra thành lập GVR/H2A cũng từng sinh hoạt tại đây, điển hình như Lee7, Phương CD, Andree, Linh Lam, Khánh HP, It's Lee , BDT. DSK đã từng và đang là thành viên của các tổ chức, đội nhóm như GVR, 21blacjac, Viger, S.D Records." />, document.getElementById('profile'));
