<div id="modal" class="modal">
<div class="modal-content">
    <header class="bg-dark" style="text-align:center; color:white">
        　　うつ病に関する相談はこちら <span class="modal-close">×閉じる</span>
    </header>
    <div class="modal-body">
        <form action="sendContact">
            <input type="text" placeholder="名前" name="name" required>
            <textarea placeholder="内容" name="content" required></textarea>

            <button type="submit" formaction="sendContact" class="btn btn-success">
                送信
            </button>
        </form>
        <script src="{{ asset('/js/closeModal.js') }}"></script>
    </div>
</div>
</div>    