"""Structural checks, not a substitute for WordPress runtime testing."""
from pathlib import Path
import json, re
r = Path(__file__).resolve().parents[1]
for name in ('style.css', 'theme.json', 'templates/index.html', 'functions.php', 'LICENSE'):
    assert (r / name).is_file(), name
j = json.loads((r / 'theme.json').read_text())
assert j['version'] == 3
for p in list((r / 'templates').glob('*.html')) + list((r / 'parts').glob('*.html')) + list((r / 'patterns').glob('*.php')):
    text = p.read_text()
    for kind, raw in re.findall(r'<!-- wp:(template-part|pattern) (\{.*?\}) /-->', text):
        slug = json.loads(raw)['slug']
        target = r / ('parts/' + slug + '.html' if kind == 'template-part' else 'patterns/' + slug.split('/')[-1] + '.php')
        assert target.exists(), str(target)
    assert 'cdn.tailwindcss.com' not in text
    assert 'fonts.googleapis.com' not in text
    assert '<script' not in text
print('PASS: required files, JSON, referenced parts/patterns, and no external script/font dependencies')
