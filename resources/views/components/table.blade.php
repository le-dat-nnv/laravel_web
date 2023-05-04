<div class="layout_operation">
    <button type="button" class="btn btn-primary">Thêm</button>
    <button type="button" class="btn btn-secondary">Sửa</button>
    <button type="button" class="btn btn-success delete-button">Xóa</button>
    <button type="button" class="btn btn-danger">Dupication</button>
</div>
<div class="table-responsive">
    <table class="table table-bordered ">
        <thead class="shadow-none p-3 mb-5 bg-body-tertiary rounded">
            <tr>
                <th><input class="form-check-input checkALL" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."></th>
                @foreach ($header as $column)
                <th scope="col">{{ $column }}</th>
                @endforeach
                <td>Edit</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($datas as $row)
            <tr>
                <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."></td>
                @foreach ($row as $value)
                <td>{{ $value }}</td>
                @endforeach
                <x-TableWithEditButton :dataId="$row->id" />
            </tr>
            @empty
            <tr>
                <td colspan="{{ count($header) }}" class="text-center">No data found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>