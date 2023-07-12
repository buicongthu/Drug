<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?= ucwords($data['page_title']) ?></h4>
                        <p class="card-description">
                            <a href="<?= ROOT ?>admin/brand?action=add">
                                <i class="mdi mdi-plus-circle-outline">Thêm mới</i>
                            </a>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Tên thương hiệu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (isset($data['brand']) && is_array($data['brand'])) : ?>
                                        <?php foreach ($data['brand'] as $item) : ?>
                                            <tr>

                                                <td><?= $item->name ?></td>

                                                <td>
                                                    <a style="color: black;" href="<?= ROOT . "admin/brand?action=edit&id=" . $item->id ?>">
                                                        <i class="mdi mdi-table-edit"></i>Edit
                                                    </a>
                                                    |
                                                    <a style="color: black;" href="<?= ROOT . "admin/brand?action=delete&id=" . $item->id ?>">
                                                        <i class="mdi mdi-delete"></i>Delete
                                                    </a>

                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <td colspan="8">
                                            <p style="text-align:center;">No data available in table</p>
                                        </td>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <!--Pagination -->
                        <?php require './app/views/admin/partials/_pagination.php' ?>
                        <!--//Pagination -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>