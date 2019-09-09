<template>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h5 class="card-title">Мои задачи</h5>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Исполнитель</th>
                    <th scope="col">Эвент</th>
                    <th scope="col">Клиент</th>
                    <th scope="col">Назначен на</th>
                    <th scope="col">Статус</th>
                    <th scope="col">Комментарий</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="/performer/1">Исполнитель 1</a></td>
                    <td><a href="/event/1">Эвент 1</a></td>
                    <td><a href="/client/1">Клиент 1 vkname [vk_id]</a></td>
                    <td>Lorem ipsum</td>
                    <td>
                        <select class="custom-select">
                            <option selected>Обработать</option>
                            <option value="1">Ожидание ответа</option>
                            <option value="2">Купил билет</option>
                            <option value="3">Отказался</option>
                        </select>
                    </td>
                    <td><textarea class="form-control"></textarea></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><a href="/performer/1">Исполнитель 1</a></td>
                    <td><a href="/event/1">Эвент 1</a></td>
                    <td><a href="/client/1">Клиент 1 vkname [vk_id]</a></td>
                    <td>Lorem ipsum</td>
                    <td>
                        <select class="custom-select">
                            <option selected>Обработать</option>
                            <option value="1">Ожидание ответа</option>
                            <option value="2">Купил билет</option>
                            <option value="3">Отказался</option>
                        </select>
                    </td>
                    <td><textarea class="form-control"></textarea></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><a href="/performer/1">Исполнитель 1</a></td>
                    <td><a href="/event/1">Эвент 1</a></td>
                    <td><a href="/client/1">Клиент 1 vkname [vk_id]</a></td>
                    <td>Lorem ipsum</td>
                    <td>
                        <select class="custom-select">
                            <option selected>Обработать</option>
                            <option value="1">Ожидание ответа</option>
                            <option value="2">Купил билет</option>
                            <option value="3">Отказался</option>
                        </select>
                    </td>
                    <td><textarea class="form-control"></textarea></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Index"
    }
</script>

<style scoped>

</style>