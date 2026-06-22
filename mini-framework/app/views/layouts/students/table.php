<table border="1" cellpadding="8">
    <tr>
        <th>Name</th>
        <th>Course</th>
        <th>Action</th>
    </tr>

    <?php foreach($students as $student): ?>
        <tr>
            <td><?= htmlspecialchars($student->getName()) ?></td>
            <td><?= htmlspecialchars($student->getCourse()) ?></td>
            <td>
                <button class="delete-student" data-id="<?= $student->getId() ?>">
                    Delete
                </button>
            </td>
        </tr>
    <?php endforeach; ?>
</table>