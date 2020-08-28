line = 0

with open('partials/_signupModal.php','r') as f:
    for l in f.readlines():
        line += 1

print(line)