"""Build an installable ZIP without repository/development files."""
from pathlib import Path
from zipfile import ZipFile, ZIP_DEFLATED
root = Path(__file__).resolve().parents[1]
(root / 'dist').mkdir(exist_ok=True)
files = ['style.css', 'theme.json', 'functions.php', 'readme.txt', 'LICENSE', 'screenshot.png']
for folder in ('assets', 'templates', 'parts', 'patterns'):
    files.extend(str(p.relative_to(root)) for p in (root / folder).rglob('*') if p.is_file())
with ZipFile(root / 'dist/cartsfront.zip', 'w', ZIP_DEFLATED) as archive:
    for name in sorted(files):
        archive.write(root / name, 'cartsfront/' + name)
print('Built dist/cartsfront.zip with', len(files), 'files')
