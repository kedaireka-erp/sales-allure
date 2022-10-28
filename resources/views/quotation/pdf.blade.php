<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quotation PDF</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    *,
    *::after,
    *::before {
        box-sizing: inherit;
    }

    html {
        box-sizing: border-box;
        font-size: 62.5%;
    }

    body {
        font-family: "Open Sans", sans-serif;
        font-weight: 400;
        line-height: 1.6;
        min-height: 100vh;
        padding: 4rem;
    }

    .header-title h1 {
        font-size: 3.5rem;
    }

    .header-title h2 {
        font-size: 2.5rem;
    }

    table {
        font-size: 2rem;
    }

    .table-title {
        width: 23rem;
        font-weight: bolder;
    }
    .table-title2 {
        width: 23rem;
        font-weight: bolder;
    }
    .table-quo{
        text-align: center;
    }

    .header-logo1 {
        width: 33%;
        text-align: start;
    }

    .header-title {
        width: 33%;
        text-align: center;
    }

    .header-logo2 {
        width: 33%;
        text-align: end;
    }

    .keterangan {
        margin-top: 3rem;
        display: flex;
        flex-direction: column;
        gap: 2rem;
        font-size: 1.5rem;
        max-width: 100%;
    }

    .keterangan-title {
        font-weight: bolder;
    }
    .detail{
        font-size: 1.5rem;
    }
</style>

<body>
    <section class="quotation-pdf">
        <table>
            <tr>
                <td class="table-title">
                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD//gAfQ29tcHJlc3NlZCBieSBqcGVnLXJlY29tcHJlc3P/2wCEAAQEBAQEBAQEBAQGBgUGBggHBwcHCAwJCQkJCQwTDA4MDA4MExEUEA8QFBEeFxUVFx4iHRsdIiolJSo0MjRERFwBBAQEBAQEBAQEBAYGBQYGCAcHBwcIDAkJCQkJDBMMDgwMDgwTERQQDxAUER4XFRUXHiIdGx0iKiUlKjQyNEREXP/CABEIAMgAxwMBIgACEQEDEQH/xAAdAAEAAgMAAwEAAAAAAAAAAAAACAkBAgcDBAYF/9oACAEBAAAAAJmQJ9r2NRoZbb777mvixMXp/EacsbagAZGMWuyg5HS/1Gx5nXw7+Tfx6beLwatvLtCiN9sEm+W0q93uFAABWrC62OTHL6Uu93BAfJVwe5ZZ+oBWnC22qSnLqU+/2/AQlrg2sxmMBWnC22qSnLqU5B29AxTV+78z+pcVkFacLba5J8vpSkDb4DnNKFhHqQDuf6qCtGF9tMleX0pd8uBBX7Aq6TNLc3bGQVoQwtnkvy2lTu9wwa0m/p3QZpX+bvG8wVnwxtoktyulbudxQcKp5sInmgRX9anKUKzoZW1SU5RSz3G4wK1Ia3b/AHznNKMibawrMhpbXJPk9LXb7jh69HPRLicsU68au/8AsRWZDW2iSvJqW+33HCNFTsnpZeJtFWL0v5JPOhVHi1+TnJqW+33HCqqK+NhthjU3WsSj5LS53K4s9Cir7WTrRtvG3k8muna6vLMXpnJaXO6XEkQKxbKZoAitVbMyy8DktLndbiCojgt332YPQor9y8j3wcmpb7ncU+Oo/wC33A5Aq5idaDLYHJ6Wu5XFoWV32JTRARxql7pboDlFLPdLiTDIDHrY9sHKKWup2PtfD4nh01M777750xt3D6bkdL+2uMgADGbXZP8AzkIc7btdWwxjGDy751l796AAAA//xAAUAQEAAAAAAAAAAAAAAAAAAAAA/9oACAECEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAH//xAAUAQEAAAAAAAAAAAAAAAAAAAAA/9oACAEDEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAH//xAAvEAAABAUEAgEEAQQDAAAAAAAAAQYIAgMEBQcQERg3EiAhFjAxQRQTQFFxFTZC/9oACAEBAAEIAMmr+ixikK9VVl1eot6qqOO1Ur2lbLl7VZveUv65vKgc3lQCe8pwb3lQObqrHN1Vjm6qxzeVQ5vKkE95TgnvKUE99QgnwX0c4b0OcN5HOG8g3wXv9G+BQjm+oxhbJc3KaLlqipDm5RzcMqwHsexj/Wx7HvtEPGIeMY8Yx4xjxjHjGPGMeMY8Yx4xjxjHjGPGMeMY8Yx4xAx8hnUG2JS0cLTlMw8tYNMNJK1LbIlgTd6NpuH4N9zaTh8G0zDsBfM1pWHQbQ8Q/omiYhIE0nEEINpeHwbR8QGDaNiAi3M2jYgETQsQmDZ7iOIcOsRjh1iQEzvEZAmgYhIG0LEAcji9N4wVlrtKYPciIwzzqOTpniEocRrcGG29wpEi/snrHtkBPDyMofEM/LbENNpnzqJbgw2ct8xpQvsZCV9Ohkde1RUTHgZWOZGcFE8TJ0udK/mJVR0CsTlpUVs93s/9/T2jQeoKLTPvUS4BhsJb5mSf2HoLP+DYrCiaQi3Mtii8YyihZquo7smLmjKz3ez2AntGhdP0WmfOolwDDX+50r7mZERmedlqa6yPfbxKbai6Fb5Mo6S55wRxInJSlsshvS5hQmTbHX1MMRRQwxQ+z2ewE9o0Lp+h0z51EuAYa+e2Z0r75nWn0NjlSXyTMjinRRzo2UpL+jQKRaTnsI+aU1NLanp5sdPNlzYMELUlvjFO3ef7PY7CsGjQeoaPTPnUS4BhspnDmVKH7vTWRRVicQtKXlGcEEGCklIReME1bZOdUdTrLGCmtsZmcsoiDM11HQKC5Ieo9nr9h2HRn/UVNpn7qFbgw2s9sxJL2qqiTR00+qqMrqyctl8pL9PwgkZi0ySmrRDLlwSpcEqXHBDMgjlx5kSc1GZHVFnNDKWoSasTt/pLJd6O92e3Xeh9Xr9h2LRoPUNJo4DqBcAw27uJIezkVnJSOKlBLL8n8sqRBkV/XtVo9ZGFD9OLmm/ER7NBW8ajx5NsNX6vX7EsejQ+oKLRwnTy3BhuPcKO9nkrf/llhQJOkkSJlVPkU8nDiR+iccpexzdMyouBb46UFkKfIm0s2fSzmxLgkdky3yJ/q9PsKyaND6godHC9OrgGG59wo31vFykWS0XG71S6UUxWq5QqWY3lFwrbJ9koKkiIiIi0MiMjI3AoskZlJTUUqhq51BV09bTYxV0hbIVPKOD0emW2QrFo0HqGj0cN06uAYbp3AjvV2izjTWNIrZSRbGZ7Nwy0icVVqhrVKTycUwGZEbzsYfrmfjEE83FhEHHZWRGVqxPVyZIyIyMm7uEs2MbNcE6pzeRi4E8jFn7J42JwTw8TmHG5NsGUVdQXZO/HiGeR74llaOG6dXAMNz7gR3q7NbGpsjx2aSZbHp8D/XyNzIERn8jcj33/AMbH+/TbciItz2LZnBb4o0cP04uQYbj3Cj/RU3ymTSeu98q77eKtQ3m53uvxZjK65TUktPW02O34GxxQg2OKQEx1SDg4ogbHlEMuYlvOIr3S2a6RfOwxW2q55TTECioSY6ogbHVGDY6pgTH1LDsZmx5R/k8MY2jxSjJKZnBxHTi4Bht/cSP9HlrSKzo+1pSm+Nz3ZgkjoExfFjUezvkOV/QMlS0/4PYM8XhWZbVKPn+7h+nFyDDbu4kjqexFubmVt9Y5PupU9JSzauokU0rGKXpkQhE4nab2UVlpb9YrvZq2+WiusV1r7TdElfqpLKayqGksF7pFBYrXeaL2cN06uAYbf3CkdcnqqQhkEpVHHVz46mpqKic21IRK3K1ggmkREREXu7lGSk7kSnvcsiIvKKNna4O9oqsSlX7OF6dXAMNw7hSGryr/AHaO2WBI2orFeCPcM4QdbZbReFldPsOrQs1XY7Ott0dqupHHu3lQXNB5Js9dW+zhOnlxo2/uFIazKennH5TTt1AcPiJcuXKhKCV9iKGGIjhijsVj2MjjsVjhOA/dwnTq40w0qrWi8hp5RXuJ2OHpBlCOWuHQbtsQA3c4hBO6xDADd/iMG8TEoN4uKBzHxUOY+KxzHxWOY2KQTxMTgnhYkHMDEgJ3uIwbvMRg3f4jBvAxICd9iIIRfJ/IllO/J0OEI4MNLkbAtth/nXcbjcbjcbjcbjcbjcbjcbjfQvyQZ1KODE/npkFKEuEdfktHAyGu/wDfB+qHB+eOD8wGx+MGx+eDZBUjhBVDhBPBsgmjhBOBsgng2QVANkFUOENWOENYOENaCZDV/smQTf3wgMGx8hwfjGLMfU+LkhRpWn/uv//EAEEQAAEDAQQECAwEBgMAAAAAAAECAwQABQYQESBUk5QSExQhMUFVsiIwMlFSU2Jxc5Gj0hVCY7MjQENhg4ShotH/2gAIAQEACT8As6RNRHyShhgpSVLUDwQpSvJTV34MCGCShnh8evL21rFXYhOr9JLmVXRh7Y1dGDtlVdGDtVVdKFtVVdKDtVVdOBtV1dOBtjV0oG1VV0oO1VV0oO2VV0oW2NXRh7Y1dCJtjVzY23NXLjbwauVH3k1cuPvBq5sbbmrmxNuaudD25qAmI7x7rC2kK4QzRh+UMr+S6GAOefNmDQPyoGkmkmkmkmkmkmkmkmkmkmkmkmkmkmgaGWH5rTk4anwsOM5DKcVxgbPBUQkVZ03eagTt4qzZu8mrPnD/AGqj2lvVRbR3moE7eas2ZvJqDP3moc/eahT95qPaW80i1x/tUbY3ofZSrY3ofZX4vvQ+2mbU3qo1pb1XKeTSoAkrS+4F8EhZGHaMnDs5eHrV/wAn2MO+cNfk4dnrw9J3u+IyCYbBLaVfncPMkU7AQgk5AsCkWc60FgryZp4LiToyHkqHtDnHiOxx+4cNek97Ds9eHnd7viH0hc54ypSf0mqGefUOc0Msjze8eenUlyyFhcXzlhfiOxh31Ya9J72HZ68P1dPoFLJhtOmJFHsNHLMUyHYUVlcp1JpjioocTIjD9FwUSIEsmBJ9z3QfnRzBAIOn2MO+rDXpPew7PXh+t3dN0IliMtmLn1vLGQpea1LJPvVmc6/ru8gZ9yOdVISGQ2YEnvIpRSpCkrB8yk84qQHJqGTGlekHGSU6fYye+rDX5OHZy8PSd7um8c2kGfLHUeH4KBSfCzyGXSo0kpcfY5a+T0lyR4dIJeYirlx8unjWAVigDmEk0rNi0wqUwCehxA0+x0d9WGvycOz14etXpLCGWW1OOKPMAlIzJNOlSHJS0Mf2aQckim+Gw3JEqSD6lk5mkhKEJCUgdQFAFKgQR5waa4tnlK32PguHMUotrhT2lrUOtrhAKT8qcC48phDyFDzKGl2Ojvqw16ThqCsPXq0lESbWYXZrHpZvpKVKwR5YMCN3lnFnyl8gk99BryRToMqxJJYQCc1FhQCk6XY6O+rDXZPfw1A4awdJ8Li2XHC3gOp9ykEuOOJQkDrKzkKaCJSILS5Xx1pzXi0FyeTqfj/GbFIKHGlqbWD1LSciKWUwrWAguDq4aiMjpdkD9w4a7J7+GoHDWdEhDMSO48r3IGdDLl8119IzzyQTkKB5JEBnPe5rRBESU/y1j3SfDPyJpZS8w4HG1eZaDmKWC5Ihtl4DqdAyUNHsgfuHDXpPfw1E4azoyg1MtiU3Gy6+IHhLrznL3VZsl6XMSyiNIYQlZQhGeaajWtsBUO1tgKh2rsBUK19gKiSES4yFokOvoCFFv0aGeR5veKalLhl7j46mEcPgk0zamwFNWpsK/E9hX4lu9IeEWPASwVup4BJ4ZNdOddoSMNQOGs6LucSxUGP/AJfz4ihQFCgBliBodJw7TkYagcPXnQcCGocZx0k+yOYUsrlTpLsh0+04ompKIwDZdfkLSVhpAq/ULc1/fV+oO5r++r8QN0X99X4gbour8wNzX99X5g7ov76lNTESWOPYlNIKEqGeRGRwvPEhgvrbLS2i6QE1fiBua/vq/EDdF/fV+LP3RdX4gbour9QNzX99Wmic6H3HlvoQUJKlnqBJw1A4euVoOEO2u8pTvwmaP9x76aRw7SkBiOesNsaaByiw3C4r4K66jS8o1tNZsfHZQV+I1A4euXoSC5BsvKGx6OafLrwnHnENpA5zmshNN8Hk8RKl/Ec8NZ+Z02w4xLiOMqSfbBFMlmbFeUh5BGWSs6d4t+BLafBHmCgFD5U6h1iXHQ6kpOYOY09QOHrlYpzMWIvgDzuL8FNeE464pajn0knOmguFAKpsnP0Wx4H/AG8Sf4NusLey8zjBANdJzApX8exn8mfgLGY09QOHr1YsS1tSFmRODLa1AoHkA5VZE0oz1df/AJTK2HJ+cVht1BQvimj4mEX7TsuQJDXAGa+BkQsVZcodOebK+b/irOmCFPPI3smlf1Dkk6eoHD168WG1nozUkGoTAHw00hKEjqSMh4kApIyINWTEJ+EmrJi8NJBSeKT4JHWNPUFYFYgxHSXCgZkZjKrWkK9pMdZq1pO7rq0pewNTpu71Kn7vT9obvSrS3evxLYUi0thSLS2NItLYUm0thX4jsKctHdjT8/d6lTthUqdsKfn7Cn5+71Kn7uaeWuGHS0StPBIUMNQNA0DnQ66FCkikikikikikikikikikikikikikikjH89pSMHywLQjKZDo6Uk9Bq+A2VXy+jV8vo1fM7Cr5nY1fL6NXx+lV8Bsqvj9Kr5fRq+X0qvj9Kr4/Sq+A2VXvGzq942VXuGzq942dXxOyq+Z2NX0XsKvmdjU9cziVuOF5YyzKzn/N/wD/xAAUEQEAAAAAAAAAAAAAAAAAAABw/9oACAECAQE/ACn/xAAUEQEAAAAAAAAAAAAAAAAAAABw/9oACAEDAQE/ACn/2Q=="
                        alt="" width="60" />
                </td>
                <td class="table-quo">
                    <h1>QUOTATION</h1>
                    <h3>{{ $quotation->no_quotation }}</h3>
                </td>
                <td class="table-title2">
                    <img src="data:image/jpeg;base64,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"
                        alt="" width="60" style="margin-left: 18rem;"/>
                </td>
            </tr>
        </table>
       

        <div style="margin-top: 10px; margin-bottom: 30px">
            <hr style="margin-bottom: 2px">
            <hr class="hr" style="border: 2px solid #000;">
        </div>
        <div class="body">
            <table class="detail">
                <tr>
                    <td class="table-title">Kontak</td>
                    <td class="table-content">{{ $quotation->Contact->name ?? '..................' }}</td>
                </tr>
                <tr>
                    <td class="table-title">Company</td>
                    <td class="table-content">{{ $quotation->Company->name ?? '..................' }}</td>
                </tr>
                <tr>
                    <td class="table-title">Proyek</td>
                    <td class="table-content">{{ $quotation->nama_proyek ?? '....................................' }}
                    </td>
                </tr>
                <tr>
                    <td class="table-title">Aplikator</td>
                    <td class="table-content">{{ $quotation->Aplikator->aplikator ?? '..................' }}</td>
                </tr>
                <tr>
                    <td class="table-title">Status</td>
                    <td class="table-content">{{ $quotation->Status->name ?? '..................' }}</td>
                </tr>
                <tr>
                    <td class="table-title">Alasan</td>
                    <td class="table-content">{{ $quotation->alasan ?? '..................' }}</td>
                </tr>
                <tr>
                    <td class="table-title">Deal Source</td>
                    <td class="table-content">{{ $quotation->DealSource->name ?? '..................' }}</td>
                </tr>
                <tr>
                    <td class="table-title">Tanggal</td>
                    <td class="table-content">{{ $quotation->created_at->translatedFormat('d F Y') ??
                        '..................' }}</td>
                </tr>
                <tr>
                    <td class="table-title">Nominal Penawaran</td>
                    <td class="table-content">@currency($quotation->nominal)</td>
                </tr>
            </table>
            <div class="keterangan">
                <p class="keterangan-title">Keterangan</p>
                <p>{{ $quotation->keterangan ?? '..................' }}</p>
            </div>
        </div>
    </section>
</body>

</html>
