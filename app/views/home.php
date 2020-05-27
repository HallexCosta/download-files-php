<form method="POST" action="/download">
	<div class="table-responsive-xl">
		<table class="table table-bordered table-hover">
			<caption>Download miRNA Data</caption>
			<thead class="thead-light">
				<tr>
					<th scope="col">*</th>
					<th scope="col">File</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($files as $file): ?>
				<tr>
					<td><input type="checkbox" name="files[]" value="<?=$file;?>"></td>
					<td><?=$file;?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<div class="form-group">
			<input type="submit" value="Download" name="download">
			<input type="reset" value="Reset">
		</div>
	</div>
</form>