from lib2to3.pgen2 import token


@csrf_exempt
def verify_payment(request):
    data=request.post 
    product_id = data['product_identity']
    token = data['token']

    url = "https://khalti.com/api/v2/payment/verify/"
    payload = {
        "token" : token,
        "amount": amount

    }