<table style="border: 2px solid black; border-collapse: collapse;">
    <tr style="border: 2px solid black;">
        <td style="border: 2px solid black;  padding: 8px;">
            <strong>Full Name:</strong>

            {{ $request['name'] }}
        </td>
    </tr>

    <tr style="border: 2px solid black;">
        <td style="border: 2px solid black; padding: 8px;">
            <strong>Email:</strong>

            <a href="mailto:{{ $request['email'] }}">
                {{ $request['email'] }}
            </a>
        </td>
    </tr>

    <tr style="border: 2px solid black; text-align: left;">
        <td style="border: 2px solid black; padding: 8px;">
            <strong>Message:</strong>

            {{ $request['message'] }}
        </td>
    </tr>
</table>
