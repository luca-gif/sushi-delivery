<template>
  <div>

    <form>
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Nome">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="lastname" placeholder="Cognome">
        </div>

        <strong>Seleziona il giorno e l'ora di ritiro</strong>

        <div class="form-group">
            <input type="date" class="form-control" id="name" placeholder="Nome">
        </div>

        <select class="form-control" name="hour" id="hour">
            <option value="">Seleziona un orario</option>
            <option value="">12:00</option>
            <option value="">20:00</option>
        </select>

        <button type="submit" class="btn btn-secondary mt-3">Invia</button>
    </form>

  </div>
</template>

<script>
export default {
    name: 'CheckoutComp'
}
</script>

<style lang="scss" scoped>

    form{
        background-color: white;
        border-radius: 10px;
        padding: 30px;
        width: 30%;
        margin: 0 auto;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 999;
    }

</style>
