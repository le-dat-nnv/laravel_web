

<form id="edit-form" method="POST" action="{{ route('modules.update', $dataId) }}" style="display: none;">
    @csrf
    @method('PUT')
    <!-- Các trường input cho phép người dùng chỉnh sửa dữ liệu -->
    ...
    <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>