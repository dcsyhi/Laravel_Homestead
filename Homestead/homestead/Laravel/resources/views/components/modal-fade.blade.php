<!-- モダール用ボタン -->
<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">モーダルを表示する</button>
<!-- モーダル部分始まり -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">投稿フォーム</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			    <form>
				    <div class="form-group">
					<label for="TextareaPost"></label>
					<textarea class="form-control" id="FormControlTextareaPost" rows="12"></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
				<button type="button" class="btn btn-primary" id="modal-save" data-dismiss="modal">投稿する</button>
			</div>
		</div>
	</div>
</div>
<!-- モーダル部分終わり -->