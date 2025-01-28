from django.shortcuts import render

# Create your views here.

def index(request):
    context = {
        'nombre': 'Dylan',
        'es_estudiante': False,
        'lista': ['Lapiz', 'Cuaderno', 'Borrador']
    }
    return render(request, 'myapp/index.html', context)