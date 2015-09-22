@extends('template.utama')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<h1 style="display: block;">Forum Komunikasi Gereja Katolik St. Joseph</h1>
			<hr style="display: block;">
			<p style="display: block;">Mohon<a href="http://">Login</a>/<a href="#">Daftar</a>terlebih dahulu untuk dapat berinteraksi dalam forum gereja</p>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<table class="table table-bordered table-condensed" id="forum">
				<thead class="th-forum" style="display: table-header-group;">
				<tr style="display: table-row;  ">
					<th style="width: 70%; display: table-cell;">Forum</th>
					<th style="text-align:center; width:8%">Topik</th>
					<th style="text-align:center; width:8%">Post</th>
					<th style="text-align:center; width:14%">Pos Baru</th>
				</tr>
				</thead>
				<tbody style="display: table-row-group;">
				<tr class="kategori" style="">
					<td >Selamat bergabung di sini</td>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				</tr>
				<tr>
					<td class="topik"><span class="topikTitle">askdasjdlaksjdalsd</span><br/><span class="topikDesc">hahahahahaha</span></td>
					<td class="topikCount">Jacob</td>
					<td class="postCount">Thornton</td>
					<td class="newPost">@fat</td>
				</tr>
				<tr>
					<td class="topik"><span class="topikTitle">askdasjdlaksjdalsd</span><br/><span class="topikDesc">hahahahahaha</span></td>
					<td class="topikCount">Jacob</td>
					<td class="postCount">Thornton</td>
					<td class="newPost">@fat</td>
				</tr>
				<tr>
					<td class="topik"><span class="topikTitle">askdasjdlaksjdalsd</span><br/><span class="topikDesc">hahahahahaha</span></td>
					<td class="topikCount">Jacob</td>
					<td class="postCount">Thornton</td>
					<td class="newPost">@fat</td>
				</tr>
				<tr class="kategori">
					<td>3</td>
					<td>Larry</td>
					<td>the Bird</td>
					<td>@twitter</td>
				</tr>
				<tr>
					<td class="topik"><span class="topikTitle">askdasjdlaksjdalsd</span><br/><span class="topikDesc">hahahahahaha</span></td>
					<td class="topikCount">Jacob</td>
					<td class="postCount">Thornton</td>
					<td class="newPost">@fat</td>
				</tr>
				<tr>
					<td class="topik"><span class="topikTitle">askdasjdlaksjdalsd</span><br/><span class="topikDesc">hahahahahaha</span></td>
					<td class="topikCount">Jacob</td>
					<td class="postCount">Thornton</td>
					<td class="newPost">@fat</td>
				</tr>
				<tr>
					<td class="topik"><span class="topikTitle">askdasjdlaksjdalsd</span><br/><span class="topikDesc">hahahahahaha</span></td>
					<td class="topikCount">Jacob</td>
					<td class="postCount">Thornton</td>
					<td class="newPost">@fat</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection