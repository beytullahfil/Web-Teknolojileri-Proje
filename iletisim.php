<table>
			<tr>
				<th scope="row">İsim:</th>
				<td><?php echo $_POST["adı"]?></td>
			</tr>
			<tr>
				<th scope="row">Soyisim:</th>
				<td><?php echo $_POST["soyadı"]?></td>
			</tr>
			<tr>
				<th scope="row">Email:</th>
				<td><?php echo $_POST["email"]?></td>
			</tr>
			<tr>
				<th scope="row">Cinsiyet:</th>
				<td><?php echo $_POST["cinsiyet"]?></td>
			</tr>
			<tr>
				<th scope="row">Hesaplar:</th>
				<td><?php if(isset($_POST['sosyalmedya'])) {
                        $sosyalmedya = $_POST['sosyalmedya'];
 
                        foreach($sosyalmedya as $sosyal) {
                             echo ' / ' . $sosyal . ' <br/>';
                                                    }
                    } else {
                            echo 'Hiç Sosyal Medya Hesabı Seçmediniz.';
                            }?></td>
			</tr> 
			<tr>
			<th scope="row">öğrencino:</th>
				<td><?php echo $_POST["öğrencino"]?></td>
			</tr>
      		<tr>
			  <th scope="row">Adres:</th>
				<td><?php echo $_POST["adres"]?></td>
			</tr>
	</table>