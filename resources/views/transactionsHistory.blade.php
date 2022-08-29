<table class="table" id="transacTble">
    <h2>Transations History <i id="closeTable" style="color: red; margin-left: 70px">close</i></h2>
    <script>
        $(document).ready(function() {
            $('#closeTable').click(function() {
                document.getElementById('transacTble').style.display = "none";
            });
        });
    </script>
    <tr>
        <th>Deposit date</th>
        <th>Amount</th>
        <th>Deposit type</th>
        <th>Sender / Receiver's Name</th>
    </tr>
    @foreach (auth()->user()->deposits as $deposit)
    <tr>
        <td>
            {{ $deposit->created_at }}
        </td>

        <td>
            {{ $deposit->amount }}
        </td>
        <td>
            @if ($deposit->confirmed)
            Confirmed
            @else
            Not Confirmed
            @endif
        </td>

        <td>
            {{ $deposit->mode_of_deposit }}
        </td>
    </tr>
    @endforeach
</table>