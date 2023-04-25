@props(['dataId'])

<td>
    <button type="button" class="btn edit-button">
       <svg width="64px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g id="Complete"> <g id="edit"> <g> <path d="M20,16v4a2,2,0,0,1-2,2H4a2,2,0,0,1-2-2V6A2,2,0,0,1,4,4H8" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path> <polygon fill="none" points="12.5 15.8 22 6.2 17.8 2 8.3 11.5 8 16 12.5 15.8" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon> </g> </g> </g> </g>
       </svg>
   </button>
       <button type="submit" class="btn btn-primary save-button" style="display: none;">Lưu</button>

       <form id="edit-form-{{ $dataId }}" method="POST" action="{{ route('modules.update', $dataId) }}" style="display: none;">
        @csrf
        @method('PUT')
        <!-- Các trường input cho phép người dùng chỉnh sửa dữ liệu -->
        ...
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</td>